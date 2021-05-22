<?php
$servername = "remotemysql.com:3306";
$username = "pyObr1UbzP";
$passwoord = "mseQDqlCw3";
$database = "pyObr1UbzP";
$conn = mysqli_connect($servername,$username,$passwoord,$database);
if(mysqli_connect_errno()){
    echo "failed to connect to".$database."database :".mysqli_connect_error();
} 
?>