<?php 
session_start();
if (!isset($_SESSION["username"]))
{
    header('Location: signin.php');
    die();
}
$username = $_SESSION["username"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    include 'connect.php';
    echo "<h2>Welcome, $username!</h2>";
    ?>
</body>
</html>