<?php
//This script will handle login
// session_start();

// check if the user is already logged in
if(isset($_SESSION['username']))
{
    header("location: dashboard.php");
    exit;
}
require_once "backendphp/config.php";

$username = $password = "";
$err = "";

// if request method is post
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    if(empty(trim($_POST['username'])) || empty(trim($_POST['password'])))
    {
        $err = "Please enter email and password";
    }
    else{
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
    }


if(empty($err))
{
    $sql = "SELECT id, username, password, mob_num, name FROM User_info WHERE username = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $param_username);
    $param_username = $username;
    
    
    // Try to execute this statement
    if(mysqli_stmt_execute($stmt)){
        mysqli_stmt_store_result($stmt);
        if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password, $mob_num,$name );
                    if(mysqli_stmt_fetch($stmt))
                    {
                        if(password_verify($password, $hashed_password))
                        {
                            // this means the password is corrct. Allow user to login
                            session_start();
                            $_SESSION["username"] = $username;
                            $_SESSION["id"] = $id;
                            $_SESSION["name"] = $name;
                            $_SESSION["mob_num"] = $mob_num;
                            $_SESSION["loggedin"] = true;

                            //Redirect user to welcome page
                            header("location: dashboard.php?open=1");
                            
                        }
                        else{
                            $err="wrong password or user id";
                        }
                    }

                }

    }
}    
}
?>
<div class="login">
        <img id = "loginlogo"src="assets/img/signup.png" alt="">
        <h1>Login Now</h1>
        <form method="POST" action="">
            <input type="email" placeholder="Your email" class="inp" name="username">
            <input type="password" placeholder="Your password" class="inp" name= "password">
            <p><input type="checkbox" style="margin: 5px; scale: 1.5;">Keep me logged in</a></p>
            <button type="submit" class="loginbtn" id="login">Log In</button>
            </form>
        <p>don't have an account <a href="login.php?page=signup"><button class="btn btn-outline-success btn-sm" id="signup">Signup</button></a></p> 
        
    </div>