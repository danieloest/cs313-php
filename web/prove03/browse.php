<?php session_start();

// Add item to session
$animal = $_GET['animal'];
$quantity = $_GET['quantity'];
$cost = $_GET['cost'];
if (!is_null($animal) && !is_null($quantity) && !is_null($cost)) {
    echo "In if";
    // var_dump($animal);
    // var_dump($quantity);
    // var_dump($cost);
    class Product {
        function Product() {
            $this->price = $cost;
            $this->animal = $animal;
            $this->quantity = $quantity;

        }
    }
    
    $product = new Product();

    $_SESSION.array_push($product);
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
    <script src="displayItems.js"></script>
    <title>ZMart</title>
</head>
<body>
    <?php include 'header.php'; ?>
    <div id="itemDisplay" class="flex-container">
        <script>displayItems();</script>
    </div>
</body>
</html>