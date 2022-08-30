<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EZ Tickets</title>
    <link rel="stylesheet" href="style.css?v=0.0.1">
    
</head>
<body>
<div class="login-box">
  <h2>Login</h2>
  <form id="login" action="./partial/admin_login.php" method="post">
    <div class="user-box">
      <input type="text" name="admin" required="">
      <label>Admin ID</label>
    </div>
    <div class="user-box">
      <input type="password" name="password" required="">
      <label>Password</label>
    </div>
    <a href="#" onclick="myFunction()">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      LOG IN
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