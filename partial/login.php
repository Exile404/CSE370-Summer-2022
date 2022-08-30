<?php
session_start();
$showError = false;
$_SESSION["loggedin"] = 0;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'db.php';    
    $email    = $_POST["email"];
    $password = $_POST["password"]; 
    $sql      = "Select * from user where email='$email' AND password='$password'";
    $result   = mysqli_query($conn, $sql);
    $num      = mysqli_num_rows($result);
    if ($num == 1){
        $login = true;
        $_SESSION["loggedin"] = 1;
        $_SESSION['email'] = $email;
        
        header("location: ../welcome.php");

    } 
    if ($num == 0){
        $showError = "Invalid Credentials";
        echo "Invalid Credentials";
        header( "refresh:2;url=../login.php" );
    }
}
    
?>