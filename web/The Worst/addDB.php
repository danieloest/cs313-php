<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
        // $statement->execute(array(':productname' => $name, ':mainpicture' => $mainpicture, ':previewpicture' => $previewpicture,':sidepicture' => $sidepicture, ':price' => $price, ':clothingsection' => $section));
        // $statement  = $db->prepare("INSERT INTO product(:productname, :mainPicutre, :previewPicture, :sidePicture, :price, :clothingsection);");
        $stmt->bindParam(':productname', $name);
        $stmt->bindParam(':mainpicture', $mainpicture);
        $stmt->bindParam(':previewpicture', $previewpicture);
        $stmt->bindParam(':sidepicture', $sidepicture);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':clothingsection', $section);
        $stmt->execute();

        echo '<h2>Added!</h2>'
        
        ?>
    
</body>
</html>