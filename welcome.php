
<?php
session_start();
    if ($_SESSION['loggedin']==0){
        echo "you are not logged in, please login to continue";
        header( "refresh:2;url=login.php" );
    }
    $showError = false;
    include_once 'db.php';
    $email=$_SESSION['email'];
    $sql = "SELECT * FROM user WHERE email='$email'";
    $result   = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);

?>

<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <link rel="stylesheet"href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/3.6.95/css/materialdesignicons.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>User Page</title>
</head>
<body>
<nav class="navbar navbar-expand-lg fixed-top main-navbar bg-color main-navbar-color" id="main-navbar">
        <div class="container">
            <a class="navbar-brand" href="#">EZ Tickets</a>
            <div class="order-lg-last btn-group">
                <i class="fas fa-shopping-bag fa-2x"></i>

            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#myNav" aria-controls="nav" aria-expanded="false"
                    aria-label="Toggle navigation">

                <i class="fas fa-bars"></i>

            </button>

            <div class="collapse navbar-collapse"id="myNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="http://localhost/Project370/tport_select.php" class="nav-link">Buy Tickets</a>

                    </li>
                    <li class="nav-item">
                        <a href="http://localhost/Project370/issues.php" class="nav-link">Issues</a>

                    </li>
                    <li class="nav-item">
                        <a href="./logout.php" class="nav-link">Logout</a>

                    </li>
                   



                </ul>
            </div>


        </div>

    </nav>

<!-- home section start -->
<section class="home_2" id="home">
<div class="max-width">
<div class="container bootstrap snippets bootdey">
<div class="panel-body inf-content">
    <div class="row">
        <div class="col-md-4">
            <?php if($row['Gender']=='Male'){?>
            <img alt="" style="width:600px;" title="" class="img-circle img-thumbnail isTooltip" 
            src="https://bootdey.com/img/Content/avatar/avatar7.png" data-original-title="Usuario"> 
        <?php    
        }else{?>
        <img alt="" style="width:600px;" title="" class="img-circle img-thumbnail isTooltip" 
            src="https://i.pinimg.com/736x/ef/b4/56/efb4563befb0ae1bed74f004785f3f0f.jpg" data-original-title="Usuario">
        <?php
    }?>
        
            <ul title="Ratings" class="list-inline ratings text-center">
                <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
            </ul>
        </div>
        <div class="col-md-6">
            <h3><strong style="color: #c3ff00fb">Information</strong><br></h3>
                
            <table class="table table-user-information">
                <tbody>
                    <tr>        
                        <td>
                            <strong style="color: white">
                                <span class="glyphicon glyphicon-asterisk text-primary" style=""></span>
                                NID                                               
                            </strong>
                        </td>
                        <td class="text-primary">
                        <strong style="color:#f49f1c">
                        <?php echo $row['NID']; ?> 
                            </strong>  
                        </td>
                    </tr>
                    <tr>    
                        <td>
                            <strong style="color: white">
                                <span class="glyphicon glyphicon-user  text-primary"></span>    
                                Name                                                
                            </strong>
                        </td>
                        <td class="text-primary">
                        <strong style="color:#f49f1c">
                        <?php echo $row['Name']; ?> 
                            </strong>     
                        </td>
                    </tr>
                    <tr>        
                        <td>
                            <strong style="color: white">
                                <span class="glyphicon glyphicon-cloud text-primary"></span>  
                                Location                                               
                            </strong>
                        </td>
                        <td class="text-primary">
                        <strong style="color:#f49f1c">
                        <?php echo $row['Location']; ?> 
                            </strong>
                        </td>
                    </tr>

                    <tr>        
                        <td>
                            <strong style="color: white">
                                <span class="glyphicon glyphicon-bookmark text-primary"></span> 
                                Contact                                               
                            </strong>
                        </td>
                        <td class="text-primary">
                        <strong style="color:#f49f1c">
                        <?php echo $row['Contact']; ?> 
                            </strong>
                        </td>
                    </tr>


                    <tr>        
                        <td>
                            <strong style="color: white">
                                <span class="glyphicon glyphicon-eye-open text-primary"></span> 
                                Email                                               
                            </strong>
                        </td>
                        <td class="text-primary">
                        <strong style="color:#f49f1c">
                        <?php echo $row['Email']; ?> 
                            </strong>
                        </td>
                    </tr>
                    <tr>        
                        <td>
                            <strong style="color: white">
                                <span class="glyphicon glyphicon-envelope text-primary"></span> 
                                Gender                                                
                            </strong >
                        </td>
                        <td class="text-primary">
                        <strong style="color:#f49f1c">
                        <?php echo $row['Gender']; ?> 
                            </strong>
                        </td>
                    </tr>
                    <tr>        
                        <td>
                            <strong style="color: white">
                                <span class="glyphicon glyphicon-calendar text-primary"></span>
                                Birth Date                                               
                            </strong>
                        </td>

                        <td class="text-primary">
                            <strong style="color:#f49f1c">
                        <?php echo $row['birth_date']; ?> 
                            </strong>
                        </td>
                    </tr>
                                                     
                </tbody>
            </table>
            </div>
        </div>
    </div>
</div>
</div>
    
</section>
<script src="script1.js"></script>                                        
</body>
</html>