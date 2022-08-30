<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
    
    <!-- custom css file link  -->

</head>

<body>

<!------ Include the above in your HEAD tag ---------->

<form action="./tlist.php" method="post">
<section class="search-banner bg-dark text-white py-5" id="search-banner">
    <div class="container py-5 my-5">
    <div class="row text-center pb-4">
        <div class="col-md-12">
            <h2>Find your ride</h2>
        </div>
    </div>   
    <div class="row">
        
        <div class="col-md-12">
            
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center justify-content-center">
                <div class="col-md-2">
                    <div class="form-group ">
                          <select id="inputState" class="form-control" name="ttype" >
                          
                          <option><?php echo $_POST['ttype']?></option>
                            
                          </select>
                        </div>
                </div>
                
                <div class="col-md-2" >
                    <div class="form-group" >
                          <select id="inputState" class="form-control" name="jdate">
                            <option selected>... Journey Date ...</option>
                            <?php
                            $tomorrowUnix = strtotime("+0 day");

                            //Format the timestamp into a date string
                            $tomorrowDate = date("Y-m-d", $tomorrowUnix1);
                            $tomorrowUnix1 = strtotime("+1 day");

                            //Format the timestamp into a date string
                            $tomorrowDate1 = date("Y-m-d", $tomorrowUnix1);
                            $tomorrowUnix2 = strtotime("+2 day");

                            //Format the timestamp into a date string
                            $tomorrowDate2 = date("Y-m-d", $tomorrowUnix2);
                            $tomorrowUnix3 = strtotime("+3 day");

                            //Format the timestamp into a date string
                            $tomorrowDate3 = date("Y-m-d", $tomorrowUnix3);
                            ?>
                            <option><?php echo $tomorrowDate ?></option>
                            <option><?php echo $tomorrowDate1?></option>
                            <option><?php echo $tomorrowDate2?></option>
                            <option><?php echo $tomorrowDate3?></option>
                          </select>
                        </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group ">
                          <select id="inputState" class="form-control" name="start" >
                          <option selected>... Start at ...</option>
                          <option value="dhaka">Dhaka</option>
                            <option value="chittagong">Chittagong</option>
                            <option value="sylhet">Sylhet</option>
                            <option value="rajshahi">Rajshahi</option>
                            <option value="khulna">Khulna</option>
                            <option value="rangpur">Rangpur</option>
                            <option value="mymensingh">Mymensingh</option>
                            <option value="barisal">Barisal</option>
                          </select>
                        </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group ">
                          <select id="inputState" class="form-control" name="end" >
                            <option selected>... End at ...</option>
                            <option value="dhaka">Dhaka</option>
                            <option value="chittagong">Chittagong</option>
                            <option value="sylhet">Sylhet</option>
                            <option value="rajshahi">Rajshahi</option>
                            <option value="khulna">Khulna</option>
                            <option value="rangpur">Rangpur</option>
                            <option value="mymensingh">Mymensingh</option>
                            <option value="barisal">Barisal</option>
                            
                          </select>
                        </div>
                </div>
                
                
                <div class="col-md-2">
                    <button type="submit" class="btn btn-success" value= "find">Find</button>

                </div>
            </div>
                </div>
            </div>
            
        </div>
        
    </div>
</div>
</section>
</form>
<script src="script.js"></script>
</body>
</html>

