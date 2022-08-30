<?php

session_start();
if ($_SESSION['loggedin']==0){
  echo "you are not logged in, please login to continue";
  header( "refresh:2;url=login.php" );
}
$showError = false;
include 'db.php';
$sql1 = "SELECT COUNT('NID') as total_user FROM `user`";
$result   = mysqli_query($conn, $sql1);
$row = mysqli_fetch_array($result);
$sql2 = "SELECT COUNT('Transport_ID') AS tid FROM `transport`";
$result2   = mysqli_query($conn, $sql2);
$row2 = mysqli_fetch_array($result2);
$sql3 = "SELECT SUM(Available_Tickets) as Av_tic FROM `transport`";
$result3   = mysqli_query($conn, $sql3);
$row3 = mysqli_fetch_array($result3);
$sql4 = "SELECT SUM(Ticket_Quantity) as Tic_quan FROM `Tickets`";
$result4   = mysqli_query($conn, $sql4);
$row4 = mysqli_fetch_array($result4);
$sql5 = "SELECT SUM(Total) as money FROM `Tickets`";
$result5   = mysqli_query($conn, $sql5);
$row5 = mysqli_fetch_array($result5);
$sql6 = "SELECT COUNT('NID') as issue FROM `issues`";
$result6   = mysqli_query($conn, $sql6);
$row6 = mysqli_fetch_array($result6);


?>






<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="style.css" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
</head>
<body>
  <div class="container">
  <nav>
      <ul>
        <li><a href="#" class="logo">
          <img src="./pic/Admin Cat DP.jpg">
          <span class="nav-item"><?php echo $_SESSION['admin'];?></span>
        </a></li>
        <li><a href="./index.php">
          <i class="fas fa-menorah"></i>
          <span class="nav-item">Dashboard</span>
        </a></li>
        <li><a href="./users.php">
          <i class="fas fa-address-card"></i>
          <span class="nav-item">Users</span>
        </a></li>
        <li><a href="./transport.php">
          <i class="fas fa-bus-alt"></i>
          <span class="nav-item">Transport</span>
        </a></li>
        <li><a href="./ticket_buy.php">
          <i class="fas fa-ticket-alt"></i>
          <span class="nav-item">Ticket Buy</span>
        </a></li>
        <li><a href="./payment_history.php">
          <i class="fas fa-receipt"></i>
          <span class="nav-item">Payment History</span>
        </a></li>
        <li><a href="./issues.php">
          <i class="fas fa-comment-alt"></i>
          <span class="nav-item">Issues</span>
        </a></li>
        <li><a href="./settings.php">
          <i class="fas fa-cog"></i>
          <span class="nav-item">Setting</span>
        </a></li>

        <li><a href="../logout.php" class="logout">
          <i class="fas fa-sign-out-alt"></i>
          <span class="nav-item">Log out</span>
        </a></li>
    </nav>

    <section class="main">
      <div class="main-top">
        <h1>Information</h1>
      </div>


      <section class="Users">
        <div class="User-list">
          <h1>See Details</h1>
          <table class="table">
            <thead>
              <tr>
                <th>Information</th>
                <th>Details</th>
               
              </tr>
            </thead>
            <tbody>
            <tr>
            <td><?php echo 'Total User'?></td>
                <td><?php echo $row['total_user']?></td>
                
            </tr>
            <tr>
            <td><?php echo 'Total Transport'?></td>
                <td><?php echo $row2['tid']?></td>
                
            </tr>
            <tr>
            <td><?php echo 'Total Tickets'?></td>
                <td><?php echo $row3['Av_tic']+$row4['Tic_quan']?></td>
                
            </tr>
            <tr>
            <td><?php echo 'Available Tickets'?></td>
                <td><?php echo $row3['Av_tic']?></td>
                
            </tr>
            <tr>
            <td><?php echo 'Ticket Sold'?></td>
                <td><?php echo $row4['Tic_quan']?></td>
                
            </tr>
            <tr>
            <td><?php echo 'Total Payment'?></td>
                <td><?php echo $row5['money']?></td>
                
            </tr>
            <tr>
            <td><?php echo 'Total Issues'?></td>
                <td><?php echo $row6['issue']?></td>
                
            </tr>

            </tbody>
          </table>
        </div>
      </section>
    </section>
    </div>

</body>
</html>
