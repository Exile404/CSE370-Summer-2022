<?php

session_start();
if ($_SESSION['loggedin']==0){
  echo "you are not logged in, please login to continue";
  header( "refresh:2;url=login.php" );
}
$showError = false;
include 'db.php';
$sql = "SELECT * FROM `transport`";
$result   = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

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

        <li><a href="#" class="logout">
          <i class="fas fa-sign-out-alt"></i>
          <span class="nav-item">Log out</span>
        </a></li>
    </nav>


    <section class="main">
      <div class="main-top">
        <h1>Transport Informations</h1>
        
      </div>


  <div class="dropdown">
    <button class="dropbtn">Transport Type</button>
    <div class="dropdown-content">
      <a href="./transport.php#">All</a>
      <a href="./bus.php">Bus</a>
      <a href="./train.php">Train</a>
      <a href="./plane.php">Plane</a>
    </div>
  </div>

  <section class="Users">
    <div class="User-list">
      <h1>User Info</h1>
      <table class="table">
        <thead>
          <tr>
            <th>Transport ID</th>
            <th>Company Name</th>
            <th>Available Tickets</th>
            <th>Start Destination</th>
            <th>Final Destination</th>
            <th>Journey Date</th>
            <th>Departure</th>
            <th>Transport Type</th>
            <th>Type</th>
            <th>Ticket Price</th>
            
          </tr>
        </thead>
        <tbody>
        <tr>
                <td><?php echo $row['Transport_ID']?></td>
                <td><?php echo $row['Company']?></td>
                <td><?php echo $row['Available_Tickets']?></td>
                <td><?php echo $row['Start_Dest']?></td>
                <td><?php echo $row['Final_Dest']?></td>
                <td><?php echo $row['Journey_Date']?></td>
                <td><?php echo $row['Leave_Time']?></td>
                <td><?php echo $row['Transport_Type']?></td>
                <td><?php echo $row['Type']?></td>
                <td><?php echo $row['Ticket_Price']?></td>
                
              </tr>
              <?php while($row = mysqli_fetch_assoc($result)) { 
                ?>
                <tr>
                <td><?php echo $row['Transport_ID']?></td>
                <td><?php echo $row['Company']?></td>
                <td><?php echo $row['Available_Tickets']?></td>
                <td><?php echo $row['Start_Dest']?></td>
                <td><?php echo $row['Final_Dest']?></td>
                <td><?php echo $row['Journey_Date']?></td>
                <td><?php echo $row['Leave_Time']?></td>
                <td><?php echo $row['Transport_Type']?></td>
                <td><?php echo $row['Type']?></td>
                <td><?php echo $row['Ticket_Price']?></td>
                
              </tr>
              <?php 
              }
              ?>
          
        </tbody>
      </table>
    </div>
  </section>
    </section>
  </div>



</body>
</html>
