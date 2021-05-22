<?php
require_once "backendphp/config.php";

$username = $password = $confirm_password = $name = $mob_num = "";
$username_err = $password_err = $name_err = $mob_num_err = "";

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    // Check for Name
    if (empty(trim($_POST['name']))) {
        $name_err = "name cannot be blank";

    } else {
        $name = trim($_POST['name']);
    }

    // Check if username is empty
    if (empty(trim($_POST["username"]))) {
        $username_err = "Username cannot be blank";

    } else {
        $sql = "SELECT id FROM User_info WHERE username = ?";
        $stmt = mysqli_prepare($conn, $sql);
        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set the value of param username
            $param_username = trim($_POST['username']);

            // Check if email already exists
            if (mysqli_stmt_execute($stmt)) {
                mysqli_stmt_store_result($stmt);
                if (mysqli_stmt_num_rows($stmt) == 1) {
                    $username_err = "This Email already exists Please Login";
                } else {
                    $username = trim($_POST['username']);
                }
            } else {
                echo "Something went wrong";
            }
        }
    }

    mysqli_stmt_close($stmt);

    // Check for Mobile no
    if (empty(trim($_POST['mob_num']))) {
        $mob_num_err = "mob_num cannot be blank";
    } else {
        $mob_num = trim($_POST['mob_num']);
    }



    // Check for password
    if (empty(trim($_POST['password']))) {
        $password_err = "Password cannot be blank";
    
    } elseif (strlen(trim($_POST['password'])) < 8) {
        $password_err = "Password cannot be less than 8 characters";
        
    } else {
        $password = trim($_POST['password']);
    }

    // Check for confirm password field
    if (trim($_POST['password']) !=  trim($_POST['confirm_password'])) {
        $password_err = "Passwords should match";
        exit($password_err);
    }


    // If there were no errors, go ahead and insert into the database
    if (empty($username_err) && empty($password_err) && empty($confirm_password_err) && empty($name_err) && empty($mob_num_err) && empty($agree_err)) {
        $sql = "INSERT INTO User_info (name,username,mob_num,password) VALUES (?,?,?,?)";
        $stmt = mysqli_prepare($conn, $sql); 

        // Set these parameters
        $param_username = $username;
        $param_password = password_hash($password, PASSWORD_DEFAULT);

        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "ssss", $name, $param_username, $mob_num, $param_password);

            
            // Try to execute the query
            if (mysqli_stmt_execute($stmt)) {
                header("location: login.php?redirect=supok");
            } else {
                echo "Something went wrong... cannot redirect!".mysqli_stmt_error($stmt);
            }
        }
        mysqli_stmt_close($stmt);
    }
    mysqli_close($conn);
}

?>
<div class="login">
    <img id="loginlogo" src="assets/img/signup.png" alt="signup icon">
    <h1>Sign Up Now</h1>
    <form method="POST" action="">
        <input type="text" placeholder="Name" name="name" class="inp" required>
        <?php if (!empty($name_err)) {
            echo '<div class="alert alert-danger fade show" role="alert">
            <strong>'.$name_err.'</strong>
          </div>';
        } ?>
        <input type="email" placeholder="Your Email" name="username" class="inp">
        <?php if (!empty($username_err)) {
            echo '<div class="alert alert-danger fade show" role="alert">
            <strong>'.$username_err.'</strong>
          </div>';
        } ?>
        <input type="number" placeholder="Your Mobile No." name="mob_num" class="inp">
        <?php if (!empty($mob_num_err)) {
            echo '<div class="alert alert-danger fade show" role="alert">
            <strong>'.$mob_num_err.'</strong>
          </div>';
        } ?>
        <input type="password" placeholder="Your password" name="password" class="inp">
        <?php if (!empty($password_err)) {
            echo '<b style="color:red;">'.$password_err.'</b>';
        } ?>
        <input type="text" placeholder="confirm password" name="confirm_password" class="inp">
        <?php if (!empty($password_err)) {
            echo $password_err;
        } ?>
        <p><span style="margin: 5px; scale: 1.5;"><input type="checkbox" name="agree"></span>I agree to the <a href="#">terms of services</a></p>
        
        <button class="loginbtn" id="login">Sign Up</button>
     </form>
</div>