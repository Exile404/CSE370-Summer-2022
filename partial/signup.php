<?php
$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'db.php';
    $nid        = $_POST["nid"];
    $name       = $_POST["name"];
    $password   = $_POST["password"];
    $cpassword  = $_POST["cpassword"];
    $location   = $_POST["location"];
    $contact    = $_POST["contact"];
    $email      = $_POST["email"];
    $gender     = $_POST["gender"];
    $birth_date = $_POST["birth_date"];
    $sql2       = "INSERT INTO `user` (`NID`, `Name`, `Password`, `Location`, `Contact`, `Email`, `Gender`, `birth_date`)
     VALUES ('$nid', '$name', '$password', '$location', '$contact', '$email', '$gender', '$birth_date');";
    if ($password == $cpassword){
        $result     = mysqli_query($conn, $sql2);
        echo "Done! Login to get started!";
        header( "refresh:2;url=../login.php" );
    }
    if ($password != $cpassword){
        echo "Password does not match";
        header( "refresh:2;url=../login.php" );
    }
    else{
        echo "Account already exists!";
        header( "refresh:2;url=../login.php" );
    }
    
}


?>