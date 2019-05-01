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
  <!-- Add jQuery -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <title>Login</title>
</head>
<body>
  
  <?php include 'header.php';
  ?>
  <button id="loginAdmin" onclick="loginAdmin()">Login as Administrator</button>
  <button id="loginTester" onclick="loginTester()">Login as tester</button>

  <script>
    $("#loginAdmin").click(function(){
      alert("Clicked!");
    }

    );
  // function loginAdmin() {
    
  // }
  // function loginTester() {

  // }
  </script>
</body>
</html>