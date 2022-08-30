<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- custom css file link  -->
    <link rel="stylesheet" href="style2.css">

</head>
<body>
<?php

    include_once 'db.php';
	if (isset($_GET['id'])) {
		$tid = $_GET['id'];
	}
    

?>
<div class="container">
    
    <form action="./payment.php" method="POST">

        <div class="row">

            

            <div class="col">

                <strong><h3 class="title">Payment</h3></strong>

                <div class="inputBox">  
                <strong>Ticket ID</strong>
                <input type="text" placeholder="" name="tid" value="<?php echo $tid?>" readonly>
                    
                </div>
                <div class="inputBox">
                    <strong>Name</strong>
                    <input type="text" placeholder="" name="name">
                </div>
                <div class="inputBox">
                    <strong>E-mail</strong>
                    <input type="email" placeholder="" name="email">
                </div>
                <div class="inputBox">
                    <strong>Contact</strong>
                    <input type="text" placeholder="" name="contact">
                </div>
                
                <strong><label for="Payment">Payment</label></strong>
                <select id="Payment" name="payment_type">
                <option value="Mobile Banking">Mobile Banking</option>
                <option value="Internet Banking">Internet Banking</option>
                <option value="Card Payment">Card Payment</option>
                </select>
                
        </div>

        <input type="submit" value="proceed to checkout" class="submit-btn">

    </form>

</div>    
    
</body>
</html>