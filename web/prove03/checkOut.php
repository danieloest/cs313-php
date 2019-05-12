<?php session_start(); ?>
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
    <?php include 'header.php';?>
    <form action="confirm.php">
        <div class="form-group">
            <label for="fName">First Name</label>
            <input type="text" name="fName" id="fName" placeholder="Enter your first name">
        </div>
        <div class="form-group">
            <label for="fLame">Last Name</label>
            <input type="text" name="lName" id="lName" placeholder="Enter your last name">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="emil" id="emil" placeholder="Enter your email">
        </div>
        <div class="form-group">
            <label for="street">Address</label>
            <input type="text" name="street" id="street" placeholder="Street">
            <input type="text" name="city" id="city" placeholder="City">
            <input type="text" name="state" id="state" placeholder="St" size="2">
            <input type="text" name="zipCode" id="zipCode" placeholder="Zip" size="5">
        </div>
        <button type="submit"></button>
    </form>
    
</body>
</html>