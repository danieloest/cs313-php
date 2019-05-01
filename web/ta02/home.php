<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="superGlass.css">
  <title>Home page</title>
</head>
<body>
  
  <h1>WELCOM to SUPER GLASSES!</h1>
  <?php include 'header.php';
  
  $userType = $_SESSION["userType"];
  if ($userType != null) {
    echo "<h3>Welcome, $userType!<br><br>";
  }
  else {
    echo "<h3>Welcome! You are not logged in.</h3>";
  }
  
  ?>

  <a href="login.php?userType=admin"><button id="loginAdmin">Login as Administrator</button></a>
  <a href="login.php?userType=tester"><button id="loginTester">Login as tester</button></a>
  <!-- <a href="login.php?userType=null"><button id="logout">Logout</button></a> -->
  <?php
  if ($userType != null){
    echo "<a href=\"login.php?userType=null\"><button id=\"logout\">Logout</button></a>";
  }
  ?>
  
</body>
</html>