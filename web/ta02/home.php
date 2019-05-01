<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Home page</title>
</head>
<body>
  
  
  <?php include 'header.php';
  echo "<h1>WELCOM to SUPER GLASSES!</h1>";
  $isLoggedIn = false;
  if(!$isLoggedIn) {
    echo "<h2>Welcome! You are not logged in.</h2>";
  }
  ?>
  
</body>
</html>