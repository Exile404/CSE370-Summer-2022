<?php
session_start();
    include_once 'db.php';
    $ttype=$_POST['ttype'];
    $jdate=$_POST['jdate'];
    $start=$_POST['start'];
    $end=$_POST['end'];
    $sql5 = "SELECT * FROM transport where Transport_Type='$ttype' 
    AND Journey_Date='$jdate' AND Start_Dest='$start' AND Final_Dest='$end'";
    $result   = mysqli_query($conn, $sql5);
    $row = mysqli_fetch_array($result);

?>



<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tlist</title>
    <link rel="stylesheet" href="style.css?v=0.0.1">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>

<section>
  <!--for demo wrap-->
  <h1>Details of Transport</h1>
  
  
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        
        <tr>
          <th>Transport ID</th>
          <th>Company</th>
          <th>Available Tickets</th>
          <th>Start From</th>
          <th>End At</th>
          <th>Journey Date</th>
          <th>Departure</th>
          <th>Transport</th>
          <th>Type</th>
          <th>Ticket Price</th>
          <th>Action</th>
        </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">
    
      <tbody>
        <tr>
        
          <td><?php echo $row['Transport_ID']?></td>
          <td ><?php echo $row['Company']?></td>
          <td ><?php echo $row['Available_Tickets']?></td>
          <td ><?php echo $row['Start_Dest']?></td>
          <td ><?php echo $row['Final_Dest']?></td>
          <td ><?php echo $row['Journey_Date']?></td>
          <td ><?php echo $row['Leave_Time']?></td>
          <td><?php echo $row['Transport_Type']?></td>
          <td ><?php echo $row['Type']?></td>
          <td><?php echo $row['Ticket_Price']?></td>
          <td><button type="submit" class="btn btn-dark"><a href="ticket.php?id=<?php echo $row['Transport_ID'];?>">GO</a></button></td>
        
        </tr>
      <?php
  while($row = mysqli_fetch_assoc($result)) {?>
        <tr>
          <td name="trid"><?php echo $row['Transport_ID']?></td>
          <td><?php echo $row['Company']?></td>
          <td ><?php echo $row['Available_Tickets']?></td>
          <td ><?php echo $row['Start_Dest']?></td>
          <td ><?php echo $row['Final_Dest']?></td>
          <td ><?php echo $row['Journey_Date']?></td>
          <td ><?php echo $row['Leave_Time']?></td>
          <td ><?php echo $row['Transport_Type']?></td>
          <td ><?php echo $row['Type']?></td>
          <td ><?php echo $row['Ticket_Price']?></td>
          <td><button type="submit" class="btn btn-dark"><a href="ticket.php?id=<?php echo $row['Transport_ID'];?>">GO</a></button></td>
        </tr><?php ; }
        
        ?>
        
      </tbody>
    </table>
  </div>
</section>

<script src="script.js"></script>
</body>
</html>