<?php
session_start();
?>


<html lang="en">
	
<head>
	<meta charset="utf-8" />
	<title>Table Style</title>
	<meta name="viewport" content="initial-scale=1.0; maximum-scale=1.0; width=device-width;">
    
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="style4.css?v=0.0.1">
</head>
</head>

<body>

<?php


	include_once 'db.php';
	if (isset($_GET['id'])) {
		$trid = $_GET['id'];
	}
	$tid=rand(10000000,99999999);
	$email=$_SESSION['email'];
	$sql1   = "Select * from user where email='$email'";
	$sql2 = "Select * from transport where Transport_ID='$trid'";
	$result   = mysqli_query($conn, $sql1);
    $row1 = mysqli_fetch_array($result);
	$result2   = mysqli_query($conn, $sql2);
    $row = mysqli_fetch_array($result2);
	$nid=$row1['NID'];

	
	$money=0;
	$x=0;



?>
<div class="table-title">
<h3>Ticket Info</h3>
</div>
<form method="POST">
<table class="table-fill">
<thead>
<tr>
<th class="text-left">Information ID</th>
<th class="text-left">Details</th>
</tr>
</thead>
<tbody class="table-hover">
<tr>
<td class="text-left">Ticket ID</td>
<td class="text-left"><?php echo $tid?></td>
</tr>
<tr>
<td class="text-left">NID</td>
<td class="text-left"><?php echo $row1['NID']?></td>
</tr>
<tr>
<td class="text-left">Transport ID</td>
<td class="text-left"><?php echo $row['Transport_ID']?></td>
</tr>
<tr>
<td class="text-left">Company</td>
<td class="text-left"><?php echo $row['Company']?></td>
</tr>
<tr>
<td class="text-left">Ticket Quantity</td>

<form method="POST"><td class="text-left"><input type="number" name="tq" ></td></form>
</tr>
<tr>
<td class="text-left">Route</td>
<td class="text-left"><?php echo $row['Start_Dest'].' - '.$row['Final_Dest']?></td>
</tr>
<tr>
<td class="text-left">Journey Date</td>
<td class="text-left"><?php echo $row['Journey_Date']?></td>
</tr>
<tr>
<td class="text-left">Leave Time</td>
<td class="text-left"><?php echo $row['Leave_Time']?></td>
</tr>
<tr>
<td class="text-left">Transport Type</td>
<td class="text-left"><?php echo $row['Transport_Type']?></td>
</tr>
<tr>
<td class="text-left">Type</td>
<td class="text-left"><?php echo $row['Type']?></td>
</tr>
<tr>

<td class="text-left">Ticket Price(FOR ONE)</td>
<td class="text-left"><?php echo $row['Ticket_Price']?></td>
</tr>

</tbody>


</table>
<br>
<table class="table-fill">

<button type="submit" class="mod-tkt-button" name="pay">Check Total Payment</button>
</form>
</table>
<br>
<?php
if(isset($_POST['pay'])){?>
<table class="table-fill2">
	<tbody class="table-hover">
	<tr>
		<?php $tq =(int)$_POST['tq']?>
		<td class="text-left">Total Price</td>
		<td class="text-left"><?php echo (float)$row['Ticket_Price']*(int)$tq?></td>
	</tr>
	</tbody>
</table>
<?php
$x=$tq;
if ($row['Available_Tickets']>=$tq)
{
$a=$row['Available_Tickets']-(int)$tq;
$sql3 = "UPDATE transport SET Available_Tickets = $a WHERE Transport_ID='$trid'";
$result=mysqli_query($conn,$sql3) or die ("Not executed");
$money=(float)$row['Ticket_Price']*(int)$tq;
}
else
{
echo "NOT ENOUGH TICKETS";
}
?>

<br>
<br>


<?php 
$sql4="INSERT INTO `tickets` (`Ticket_ID`,`NID`,`Transport_ID`,`Ticket_Quantity`,`Total`)
VALUES ('$tid','$nid','$trid','$x','$money')";
   
$res=mysqli_query($conn,$sql4) or die ("Failed");

?>
<table class="table-fill">
<button type="submit" class="mod-tkt-button"><a href="payment_f.php?id=<?php echo $tid;?>">Proceed to Payment</a></button>
</table>
<?php 

}
?>

<br>
<br><br>
<br><br>
<br><br>
<br>


  </body>
</html>