
<?php
session_start();
  include_once 'db.php';
	if (isset($_GET['id'])) {
		$iid = $_GET['id'];
	}
 
  $sql = "SELECT * FROM `issues` WHERE `NID`='$iid'";
  $result   = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result);


?>





<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="style.css?v=0.0.1" />
  

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
        <h1>Issues</h1>
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
            <td><?php echo 'NID'?></td>
                <td><?php echo $row['NID']?></td>
                
            </tr>
            <tr>
            <td><?php echo 'Date'?></td>
                <td><?php echo $row['Date']?></td>
                
            </tr>
            <tr>
            <td><?php echo 'Subject'?></td>
                <td><?php echo $row['Subject']?></td>
                
            </tr>
            <tr>
            <td><?php echo 'Description'?></td>
                <td><?php echo $row['Description']?></td>
                
            </tr>
            

            </tbody>
          </table>
        </div>

      </section>
    </section>
  </div>

</body>
</html>
