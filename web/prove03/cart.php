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
    $product = $_GET['product'];
    $quantity = $_GET['quantity'];
    if (isset($product) && isset($quantity)) {
        if ($product == "pp") {
            $_SESSION["Peppy Puppy"]->quantity = $quantity;
            $_SESSION["Peppy Puppy"]->price = $quantity * 40;
        }
        else  if ($product == "kk") {
            $_SESSION["Krazy Kitty"]->quantity = $quantity;
            $_SESSION["Krazy Kitty"]->price = $quantity *25;
        }
        else if ($product == "GGoat") {
            $_SESSION["Goat Galore"]->quantity = $quantity;
            $_SESSION["Goat Galore"]->price = $quantity * 75;
        }
        else if ($product == "cc") {
            $_SESSION["Crazy Cow"]->quantity = $quantity;
            $_SESSION["Crazy Cow"]->price = $quantity * 80;
        }
        else if ($product == "bb") {
            $_SESSION["Blazing Birds"]->quantity = $quantity;
            $_SESSION["Blazing Birds"]->price = $quantity * 80;
        }
        else if ($product == "GGecko") {
            $_SESSION["Geeky Gecko"]->quantity = $quantity;
            $_SESSION["Geeky Gecko"]->price = $quantity * 55;
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
            echo "<tr><td>" . $_SESSION["Peppy Puppy"]->name . "</td><td><div class=\"flex-container\"><input class=\"inputNum\" type=\"number\" value=\"" . $_SESSION["Peppy Puppy"]->quantity . "\" id=\"ppQuantity\"><button type=\"button\" onclick=\"update(ppQuantity.value, 'pp')\">✔</button></div></td><td><a href=\"cart.php?remove=PP\">❌</a></td><td>$" . $_SESSION["Peppy Puppy"]->price . "</td></tr>";
            $totalCost += $_SESSION["Peppy Puppy"]->price;
        }
        if(isset($_SESSION["Krazy Kitty"])) {
            echo "<tr><td>" . $_SESSION["Krazy Kitty"]->name . "</td><td><div class=\"flex-container\"><input class=\"inputNum\" type=\"number\" value=\"" . $_SESSION["Krazy Kitty"]->quantity . "\" id=\"kkQuantity\"><button type=\"button\" onclick=\"update(kkQuantity.value, 'kk')\">✔</button></div></td><td><a href=\"cart.php?remove=PP\">❌</a></td><td>$" . $_SESSION["Krazy Kitty"]->price . "</td></tr>";
            $totalCost += $_SESSION["Krazy Kitty"]->price;
        }
        if(isset($_SESSION["Goat Galore"])) {
            echo "<tr><td>" . $_SESSION["Goat Galore"]->name . "</td><td><div class=\"flex-container\"><input class=\"inputNum\" type=\"number\" value=\"" . $_SESSION["Goat Galore"]->quantity . "\" id=\"gGoatQuantity\"><button type=\"button\" onclick=\"update(gGoatQuantity.value, 'GGoat')\">✔</button></div></td><td><a href=\"cart.php?remove=PP\">❌</a></td><td>$" . $_SESSION["Goat Galore"]->price . "</td></tr>";
            $totalCost += $_SESSION["Goat Galore"]->price;
        }
        if(isset($_SESSION["Crazy Cow"])) {
            echo "<tr><td>" . $_SESSION["Crazy Cow"]->name . "</td><td><div class=\"flex-container\"><input class=\"inputNum\" type=\"number\" value=\"" . $_SESSION["Crazy Cow"]->quantity . "\" id=\"ccQuantity\"><button type=\"button\" onclick=\"update(ccQuantity.value, 'cc')\">✔</button></div></td><td><a href=\"cart.php?remove=PP\">❌</a></td><td>$" . $_SESSION["Crazy Cow"]->price . "</td></tr>";
            $totalCost += $_SESSION["Crazy Cow"]->price;
        }
        if(isset($_SESSION["Blazing Birds"])) {
            echo "<tr><td>" . $_SESSION["Blazing Birds"]->name . "</td><td><div class=\"flex-container\"><input class=\"inputNum\" type=\"number\" value=\"" . $_SESSION["Blazing Birds"]->quantity . "\" id=\"bbQuantity\"><button type=\"button\" onclick=\"update(bbQuantity.value, 'bb')\">✔</button></div></td><td><a href=\"cart.php?remove=PP\">❌</a></td><td>$" . $_SESSION["Blazing Birds"]->price . "</td></tr>";
            $totalCost += $_SESSION["Blazing Birds"]->price;
        }
        if(isset($_SESSION["Geeky Gecko"])) {
            echo "<tr><td>" . $_SESSION["Geeky Gecko"]->name . "</td><td><div class=\"flex-container\"><input class=\"inputNum\" type=\"number\" value=\"" . $_SESSION["Geeky Gecko"]->quantity . "\" id=\"GGeckoQuantity\"><button type=\"button\" onclick=\"update(GGeckoQuantity.value, 'GGecko')\">✔</button></div></td><td><a href=\"cart.php?remove=PP\">❌</a></td><td>$" . $_SESSION["Geeky Gecko"]->price . "</td></tr>";
            $totalCost += $_SESSION["Geek Gecko"]->price;
        }
        echo "<tr><td></td><td></td><td></td><td>$" . $totalCost . "</td></tr>";
        echo "<tr><td></td><td></td><td></td><td><a href=\"checkOut.php\"><button type=\"button\" class=\"btn btn-primary pull-right checkOut\">Check out</button></a></td></tr></table>";
        $_SESSION['totalCost'] = $totalCost;
    }
    ?>
    <script>
        function update(quantity, product) {
            alert("In update. You are updating to: " + quantity + " for " + product);
            let url = "cart.php?product=" + product + "&quantity=" + quantity;
            window.location.href = url;
        }
    </script>
</body>
</html>