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
            <input class="form-control" type="text" name="fName" id="fName" placeholder="Enter your first name">
        </div>
        <div class="form-group">
            <label for="fLame">Last Name</label>
            <input class="form-control" type="text" name="lName" id="lName" placeholder="Enter your last name">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input class="form-control" type="email" name="emil" id="emil" placeholder="Enter your email">
        </div>
        <div class="form-group">
            <label for="street">Address</label>
            <input class="form-control" type="text" name="street" id="street" placeholder="Street">
            <input class="form-control" type="text" name="city" id="city" placeholder="City">
            <input class="form-control" type="text" name="state" id="state" placeholder="St" size="2">
            <input class="form-control" type="text" name="zipCode" id="zipCode" placeholder="Zip" size="5">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <!-- <form action="confirm.php">
        <table>
            <div class="form-group">
                <tr>
                    <td> <label for="fName">First Name</label></td>
                    <td><input class="form-control" type="text" name="fName" id="fName" placeholder="Enter your first name"></td>
                </tr>
            </div>
            <div class="form-group">
                <tr> 
                    <td><label for="fLame">Last Name</label></td>
                    <td><input type="text" name="lName" id="lName" placeholder="Enter your last name"></td>
                </tr>
            </div>
            <div class="form-group">
                <tr>
                    <td><label for="email">Email</label></td>
                    <td><input type="email" name="emil" id="emil" placeholder="Enter your email"></td>
                </tr>
            </div>
            <div class="form-group">
                <tr>            
                    <td><label for="street">Address</label></td>
                    <td><input type="text" name="street" id="street" placeholder="Street"></td>
                </tr>
                <tr>
                    <td><input type="text" name="city" id="city" placeholder="City"></td>
                    <td><input type="text" name="state" id="state" placeholder="St" size="2"></td>
                    <td><input type="text" name="zipCode" id="zipCode" placeholder="Zip" size="5"></td>
                </tr>
            </div>
        </table>
    </form> -->
    
</body>
</html>