<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="zmart.css">
    <script src="displayItems.js"></script>
    <title>ZMart</title>
</head>
<body>
    <?php include 'header.php'; ?>
    <div id="itemDisplay" onload="displayItems()">
    </div>
</body>
</html>