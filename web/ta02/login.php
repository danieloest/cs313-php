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
  <title>Login</title>
</head>
<body>
  
  <?php include 'header.php';
  ?>
  <button onclick="loginAdmin()">Login as Administrator</button>
  <button onclick="loginTester()">Login as tester</button>

  <?php
  function loginAdmin() {
    echo "<br><h2>Test. Logged in as admin<h2>";
  }
  function loginTester() {
    echo "<br><h2>Test. Logged in as Tester<h2>";
  }
  ?>
  
</body>
</html>