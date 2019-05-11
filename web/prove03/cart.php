<?php 
    class Product {
        function Product($cost, $quantity, $animal) {
            $this->price = $cost;
            $this->name = $animal;
            $this->quantity = $quantity;

        }
    }

session_start();?>
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
    <?php  
    // If there is nothing in the cart
    var_dump($_SESSION);
    if (empty($_SESSION)) {
        echo "<h2>You have not added anything to your cart.";
    }
    // If we have stuff in our cart
    else {
        
        echo "<table class=\"table\">
        <tr>
        <th>Item</th>
        <th>Quantity</th>
        <th>Price</th>
        </tr>";
        if(isset($_SESSION["Peppy Puppy"])) {
            echo "<tr><td>" . $_SESSION["Peppy Puppy"]->name . "</td><td>" . $_SESSION["Peppy Puppy"]->quantity . "</td><td>" . $_SESSION["Peppy Puppy"]->price . "</td></tr>";
        }
        if(isset($_SESSION["Krazy Kitty"])) {
            echo "<tr><td>" . $_SESSION["Krazy Kitty"]->name . "</td><td>" . $_SESSION["Krazy Kitty"]->quantity . "</td><td>" . $_SESSION["Krazy Kitty"]->price . "</td></tr>";
        }
        if(isset($_SESSION["Goat Galore"])) {
            echo "<tr><td>" . $_SESSION["Goat Galore"]->name . "</td><td>" . $_SESSION["Goat Galore"]->quantity . "</td><td>" . $_SESSION["Goat Galore"]->price . "</td></tr>";
        }
        if(isset($_SESSION["Crazy Cow"])) {
            echo "<tr><td>" . $_SESSION["Crazy Cow"]->name . "</td><td>" . $_SESSION["Crazy Cow"]->quantity . "</td><td>" . $_SESSION["Crazy Cow"]->price . "</td></tr>";
        }
        if(isset($_SESSION["Blazing Birds"])) {
            echo "<tr><td>" . $_SESSION["Blazing Birds"]->name . "</td><td>" . $_SESSION["Blazing Birds"]->quantity . "</td><td>" . $_SESSION["Blazing Birds"]->price . "</td></tr>";
        }
        if(isset($_SESSION["Geeky Gecko"])) {
            echo "<tr><td>" . $_SESSION["Geeky Gecko"]->name . "</td><td>" . $_SESSION["Geeky Gecko"]->quantity . "</td><td>" . $_SESSION["Geeky Gecko"]->price . "</td></tr>";
        }


        echo "</table>";

    }
    ?>
</body>
</html>