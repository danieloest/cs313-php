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
    $productid = $_GET['id'];
    $clothingsection = $_POST['clothingsection'];

    echo "<br>Product name: " . $productname;
    echo "<br>price: " . $price;
    echo "<br>mainpicture: " . $mainpicture;
    echo "<br>previewpicture: " . $previewpicture;
    echo "<br>sidepicture: " . $sidepicture;
    echo "<br>productid: " . $productid;
    echo "<br>clothingsection: " . $clothingsection;

    // $stmt  = $db->prepare("INSERT INTO product (productname, mainpicture, previewpicture, sidepicture, price, clothingsection) VALUES (:productname, :mainpicture, :previewpicture, :sidepicture, :price, :clothingsection);");
    $stmt  = $db->prepare("UPDATE product
    SET productname = :productname,
    mainpicture = :mainpicture,
    previewpicture = :previewpicture,
    sidepicture = :sidepicture,
    price = :price,
    clothingsection = :clothingsection
    WHERE productid=:productid;");
    $stmt->bindParam(':productname', $productname);
    $stmt->bindParam(':mainpicture', $mainpicture);
    $stmt->bindParam(':previewpicture', $previewpicture);
    $stmt->bindParam(':sidepicture', $sidepicture);
    $stmt->bindParam(':price', $price);
    $stmt->bindParam(':clothingsection', $clothingsection);
    $stmt->bindParam(':productid', $productid);
    $stmt->execute();
     ?>
     <h2>edited!</h2>
</body>
</html>