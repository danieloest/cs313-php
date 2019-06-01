<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="worst.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <title>The Worst</title>
</head>
<body>
    <?php
    include 'connect.php';
    include 'header.php';
    $productname = $_POST['productname'];
    $price = $_POST['price'];
    $mainpicture = $_POST['mainpicture'];
    $previewpicture = $_POST['previewpicture'];
    $sidepicture = $_POST['sidepicture'];
    $productid = $_POST['productid'];
    $clothingsection = $_POST['clothingsection'];

    echo "<br>Product name: " . $productname;
    echo "<br>price: " . $price;
    echo "<br>mainpicture: " . $mainpicture;
    echo "<br>previewpicture: " . $previewpicture;
    echo "<br>sidepicture: " . $sidepicture;
    echo "<br>productid: " . $productid;
    echo "<br>clothingsection: " . $clothingsection;
     ?>
</body>
</html>