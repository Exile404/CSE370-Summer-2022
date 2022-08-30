<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style4.css">

</head>

<body>
  <div class="wrapper">
    <form class="form" action="./partial/issues.php" method="post">
      <div class="pageTitle title">Complaints </div>
      <div class="secondaryTitle title">Please fill this form to let us know your issues.</div>
      
      <input type="date" class="name formEntry" placeholder="Date" name="date" />
      <input type="text" class="email formEntry" placeholder="Subject" name="subject"/>
      <textarea class="message formEntry" placeholder="Message" name="message"></textarea>
      <input type="checkbox" class="termsConditions" value="Term">
      <label style="color: grey" for="terms"> I Accept the <span style="color: #0e3721">Terms of Use</span> & <span style="color: #0e3721">Privacy Policy</span>.</label><br>
      <button class="submit formEntry" onclick="thanks()">Submit</button>
    </form>
  </div>
  <script src="app.js"></script>
</body>

</html>