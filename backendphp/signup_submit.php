<?php
require_once "../../backendphp/config.php";

$username = $password = $confirm_password = $name = $mob_no = "";
$username_err = $password_err = $name_err = $mob_no_err = $agree_err = "";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //check if user clicks on agree terms and services
    if (empty(trim($_POST['agree']))) {
        $agree_err = "Please agree to the terms and services";
        exit($agree_err);
    }

    // Check for Name
    if (empty(trim($_POST['name']))) {
        $name_err = "name cannot be blank";
        exit($name_err);

    } else {
        $name = trim($_POST['name']);
    }

    // Check if username is empty
    if (empty(trim($_POST["username"]))) {
        $username_err = "Username cannot be blank";
        exit($username_err);

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
                    $username_err = "This Email already taken Please Login";
                    exit($username_err);
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
    if (empty(trim($_POST['mob_no']))) {
        $mob_no_err = "mob_no cannot be blank";
    } else {
        $mob_no = trim($_POST['mob_no']);
    }



    // Check for password
    if (empty(trim($_POST['password']))) {
        $password_err = "Password cannot be blank";
        exit($password_err);
    } elseif (strlen(trim($_POST['password'])) < 8) {
        $password_err = "Password cannot be less than 8 characters";
        exit($password_err)
    } else {
        $password = trim($_POST['password']);
    }

    // Check for confirm password field
    if (trim($_POST['password']) !=  trim($_POST['confirm_password'])) {
        $password_err = "Passwords should match";
        exit($password_err);
    }


    // If there were no errors, go ahead and insert into the database
    if (empty($username_err) && empty($password_err) && empty($confirm_password_err) && empty($name_err) && empty($mob_no_err) && empty($agree_err)) {
        $sql = "INSERT INTO User_info (name,username,mob_no,password) VALUES (?,?,?,?)";
        $stmt = mysqli_prepare($conn, $sql);
        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "ssss", $name, $param_username, $mob_no, $param_password);

            // Set these parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT);

            // Try to execute the query
            if (mysqli_stmt_execute($stmt)) {
                header("location: ../../login.php?redirect=supok");
            } else {
                echo "Something went wrong... cannot redirect!";
            }
        }
        mysqli_stmt_close($stmt);
    }
    mysqli_close($conn);
}

?>