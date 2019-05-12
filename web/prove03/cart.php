<?php 
    class Product {
        function Product($cost, $quantity, $animal) {
            $this->price = $cost;
            $this->name = $animal;
            $this->quantity = $quantity;

        }
    }
    session_start();
    $remove = $_GET['remove'];
    if (isset($remove)) {
        // echo "You are removing: " . $remove;
        if ($remove == "PP") {
            unset($_SESSION["Peppy Puppy"]);
        }
        if ($remove == "KK") {
            unset($_SESSION["Krazy Kitty"]);
        }
        if ($remove == "GGoat") {
            unset($_SESSION["Goat Galore"]);
        }
        if ($remove == "CC") {
            unset($_SESSION["Crazy Cow"]);
        }
        if ($remove == "BB") {
            unset($_SESSION["Blazing Birds"]);
        }
        if ($remove == "GGecko") {
            unset($_SESSION["Geeky Gecko"]);
        }
    }
    
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
    <?php include 'header.php';?>
    <?php  
    // If there is nothing in the cart
    if (empty($_SESSION)) {
        echo "<h2>You have not added anything to your cart.";
    }
    // If we have stuff in our cart
    else {
        $totalCost = 0;
        echo "<table class=\"table\">
        <tr>
        <th>Item</th>
        <th>Quantity</th>
        <th>Remove</th>
        <th>Price</th>
        </tr>";
        if(isset($_SESSION["Peppy Puppy"])) {
            echo "<tr><td>" . $_SESSION["Peppy Puppy"]->name . "</td><td>" . $_SESSION["Peppy Puppy"]->quantity . "</td><td><a href=\"cart.php?remove=PP\">❌</a></td><td>$" . $_SESSION["Peppy Puppy"]->price . "</td></tr>";
            $totalCost += $_SESSION["Peppy Puppy"]->price;
        }
        if(isset($_SESSION["Krazy Kitty"])) {
            echo "<tr><td>" . $_SESSION["Krazy Kitty"]->name . "</td><td>" . $_SESSION["Krazy Kitty"]->quantity . "</td> <td><a href=\"cart.php?remove=KK\">❌</a></td><td>$" . $_SESSION["Krazy Kitty"]->price . "</td></tr>";
            $totalCost += $_SESSION["Krazy Kitty"]->price;
        }
        if(isset($_SESSION["Goat Galore"])) {
            echo "<tr><td>" . $_SESSION["Goat Galore"]->name . "</td><td>" . $_SESSION["Goat Galore"]->quantity . "</td><td><a href=\"cart.php?remove=GGoat\">❌</a></td><td>$" . $_SESSION["Goat Galore"]->price . "</td></tr>";
            $totalCost += $_SESSION["Goat Galore"]->price;
        }
        if(isset($_SESSION["Crazy Cow"])) {
            echo "<tr><td>" . $_SESSION["Crazy Cow"]->name . "</td><td>" . $_SESSION["Crazy Cow"]->quantity . "</td> <td><a href=\"cart.php?remove=CC\">❌</a></td><td>$" . $_SESSION["Crazy Cow"]->price . "</td></tr>";
            $totalCost += $_SESSION["Crazy Cow"]->price;
        }
        if(isset($_SESSION["Blazing Birds"])) {
            echo "<tr><td>" . $_SESSION["Blazing Birds"]->name . "</td><td>" . $_SESSION["Blazing Birds"]->quantity . "</td><td><a href=\"cart.php?remove=BB\">❌</a></td><td>$" . $_SESSION["Blazing Birds"]->price . "</td></tr>";
            $totalCost += $_SESSION["Blazing Birds"]->price;
        }
        if(isset($_SESSION["Geeky Gecko"])) {
            echo "<tr><td>" . $_SESSION["Geeky Gecko"]->name . "</td><td>" . $_SESSION["Geeky Gecko"]->quantity . "</td><td><a href=\"cart.php?remove=GGecko\">❌</a></td><td>$" . $_SESSION["Geeky Gecko"]->price . "</td></tr>";
            $totalCost += $_SESSION["Geek Gecko"]->price;
        }
        echo "<tr><td></td><td></td><td></td><td>$" . $totalCost . "</td></tr>";
        echo "<tr><td></td><td></td><td></td><td><a href=\"checkOut.php\"><button type=\"button\" class=\"btn btn-primary pull-right checkOut\">Check out</button></a></td></tr></table>";
        
    }
    ?>
</body>
</html>