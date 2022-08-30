<?php
session_start();
$showError = false;
$_SESSION["loggedin"] = 0;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'db.php';    
    $admin   = $_POST["admin"];
    $password = $_POST["password"]; 
    $sql      = "Select * from `admin` where Admin_ID='$admin' AND password='$password'";
    $result   = mysqli_query($conn, $sql);
    $num      = mysqli_num_rows($result);
    if ($num == 1){
        $login = true;
        $_SESSION["loggedin"] = 1;
        $_SESSION['admin'] = $admin;
        
        header("location: ../admin/");

    } 
    if ($num == 0){
        $showError = "Invalid Credentials";
        echo "Invalid Credentials";
        header( "refresh:2;url=../admin_login.php" );
    }
}
    
?>