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
        $name = $_POST['name'];
        $mainpicture = $_POST['mainPicture'];    
        $previewpicture = $_POST['previewPicture'];
        $sidepicture = $_POST['sidePicture'];
        $price = (float)$_POST['price'];
        $section = (int)$_POST['section'];
        
        // 

        $stmt  = $db->prepare("INSERT INTO product (productname, mainpicture, previewpicture, sidepicture, price, clothingsection) VALUES (:productname, :mainpicture, :previewpicture, :sidepicture, :price, :clothingsection);");
        $stmt->bindParam(':productname', $name);
        $stmt->bindParam(':mainpicture', $mainpicture);
        $stmt->bindParam(':previewpicture', $previewpicture);
        $stmt->bindParam(':sidepicture', $sidepicture);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':clothingsection', $section);
        $stmt->execute();

        echo '<h2 class="message">The product has been added!</h2>';
        
        ?>
    
</body>
</html>