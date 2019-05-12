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
    <div class="info">
    <form action="confirm.php">
        <div class="group">
            <div class="form-group">
                <label for="fName">First Name</label>
                <input class="form-control" type="text" name="fName" id="fName" placeholder="Enter your first name">
            </div>
            <div class="form-group">
                <label for="fLame">Last Name</label>
                <input class="form-control" type="text" name="lName" id="lName" placeholder="Enter your last name">
            </div>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input class="form-control" type="email" name="email" id="email" placeholder="Enter your email">
        </div>
        <div class="form-group">
            <label for="street">Address</label>
            <input class="form-control" type="text" name="street" id="street" placeholder="Street">
            <input class="form-control" type="text" name="city" id="city" placeholder="City">
            <div class="group">
                <input class="form-control" type="text" name="state" id="state" placeholder="State" size="2">
                <input class="form-control" type="text" name="zipCode" id="zipCode" placeholder="Zip" size="5">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
</html>