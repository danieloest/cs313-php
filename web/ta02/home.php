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
  echo "WELCOM to SUPER GLASSES!";
  $isLoggedIn = false;
  if(!$isLoggedIn) {
    echo "Welcome! You are not logged in...";
  }
  ?>
  
</body>
</html>