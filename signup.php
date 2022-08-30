<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EZ Tickets</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css?v=0.0.1">
    
    
</head>
<body>
<div class="signup-box">
  <h2>Sign Up</h2>
  <form id="login" action="./partial/signup.php" method="post">
    <div class="user-box">
      <input type="text" name="nid" required="">
      <label>NID</label>
    </div>
    <div class="user-box">
      <input type="text" name="name" required="">
      <label>Full Name</label>
    </div>
    <div class="user-box">
      <input type="password" name="password" required="">
      <label>Password</label>
    </div>
    <div class="user-box">
      <input type="password" name="cpassword" required="">
      <label>Confirm Password</label>
    </div>
    <div class="user-box">
      <input type="text" name="location" required="">
      <label>Location</label>
    </div>
    <div class="user-box">
      <input type="text" name="contact" required="">
      <label>Contact</label>
    </div>
    <div class="user-box">
      <input type="email" name="email" required="">
      <label>Email</label>
    </div>
    <div class="form-group ">
                          <select id="inputState" class="form-control" name="gender">
                            <option selected>... Gender ...</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            
                          </select>
                        </div>
    <div class="user-box">
    <label>Date of Birth</label>
    <br>
    <br>
      <input type="date" name="birth_date" required="">
    </div>
    <a href="#" onclick="myFunction()">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      SIGN UP
    </a>
    <a href="http://localhost/Project370/login.php">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      Already a user?
    </a>
  </form>
  <script>
            function myFunction() {
                document.getElementById("login").submit();
            }
        </script>
</div>

</body>
</html>