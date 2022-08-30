<?php
session_start();
$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'db.php';
    
        $name       = $_POST["name"];
        $contact    = $_POST["contact"];
        $email      = $_POST["email"];
        $payment_type   = $_POST["payment_type"];
        $tid=$_POST['tid'];
        $trnxID=rand(10000000,99999999);
    
    
    $sql3       = "INSERT INTO `payment` (`Trnx_ID`,`Ticket_ID`, `Name`, `Payment_Type`, `Email`, `Contact`)
    VALUES ('$trnxID','$tid','$name', '$payment_type', '$email', '$contact');";
    $result=mysqli_query($conn,$sql3);
    

}
?>


<!doctype html>
<html lang="en">

<!-- Head -->
<head>
  <!-- Page Meta Tags-->
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="keywords" content="">

  <!-- Custom Google Fonts-->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500;600&family=Roboto:wght@300;400;700&display=auto"
    rel="stylesheet">

  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="./assets/images/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./assets/images/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./assets/images/favicon/favicon-16x16.png">
  <link rel="mask-icon" href="./assets/images/favicon/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">

  <!-- Vendor CSS -->
  <link rel="stylesheet" href="./assets/css/libs.bundle.css" />

  <!-- Main CSS -->
  <link rel="stylesheet" href="./assets/css/theme.bundle.css" />

  <!-- Custom CSS -->
  <link rel="stylesheet" href="./assets/css/custom.css" />

  <!-- Fix for custom scrollbar if JS is disabled-->
  <noscript>
    <style>
      /**
          * Reinstate scrolling for non-JS clients
          */
      .simplebar-content-wrapper {
        overflow: auto;
      }
    </style>
  </noscript>

  <!-- Page Title -->
  <title>Confirmation</title>

</head>
<body class="">

  <?php




?>

    <!-- Main Section-->
    <section class="mt-0 ">
        

        <div class="container mt-5">

            <!-- Order Success Checkmark -->
            <div class="checkmark-wrapper mt-5">
                <span class="checkmark"></span>
            </div>
            <!-- Order Success Checkmark -->

            <!-- Order Success Message -->
            <div class="my-5 text-center min-vh-50">
                <h2 class="display-3 mb-4">Payment Done</h2>
                <p class="lead fw-bolder mx-auto col-6">Transaction ID: <span class="fw-bold"><?php echo $trnxID ?></span></p>
                <a href="http://localhost/Project370/welcome.php" class="btn btn-dark mt-4">Return to Dashboard</a>
            </div>
            <!-- /Order Success Message -->
        </div>

        <!-- /Page Content -->
    </section>
    <!-- / Main Section-->

    <!-- Footer -->
    
    <!-- / Footer-->  

    <!-- Theme JS -->
    <!-- Vendor JS -->
    <script src="./assets/js/vendor.bundle.js"></script>
    
    <!-- Theme JS -->
    <script src="./assets/js/theme.bundle.js"></script>

    <!-- Custom JS -->
    <script src="./assets/js/custom.js"></script>

</body>

</html>
