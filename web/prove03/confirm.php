<?php session_start();
$fName = $_GET['fName'];
$lName = $_GET['lName'];
$email = $_GET['email'];
$street = $_GET['street'];
$city = $_GET['city']; 
$state = $_GET['state'];
$zipCode = $_GET['zipCode'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="zmart.css">
    <title>ZMart</title>
</head>
<body>
    <div class="address">
        <h5>Shipping address</h5>
        <p><?php echo $fName . " " . $lName; ?></p><br>
        <p><?php echo $street; ?></p><br>
        <p><?php echo $city . " " . $state; ?></p><br>
        <p><?php echo $zipCode; ?></p>
    </div>
</body>
</html>