<?php
    include 'connect.php';
    $name = $_POST['name'];
    $mainpicture = $_POST['mainPicture'];    
    $previewpicture = $_POST['previewPicture'];
    $sidepicture = $_POST['sidePicture'];
    $price = (double)$_POST['price'];
    $section = (int)$_POST['section'];
    
    
    echo $name . '<br>';
    echo $mainpicture . '<br>';
    echo $previewpicture . '<br>';
    echo $sidepicture . '<br>';
    var_dump($price);
    echo $price . '<br>';
    var_dump($section);
    echo $section . '<br>';

    $stmt  = $db->prepare("INSERT INTO product (productname, mainpicture, previewpicture, sidepicture, price, clothingsection) VALUES (:productname, :mainpicture, :previewpicture, :sidepicture, :price, :clothingsection);");
    // $statement->execute(array(':productname' => $name, ':mainpicture' => $mainpicture, ':previewpicture' => $previewpicture,':sidepicture' => $sidepicture, ':price' => $price, ':clothingsection' => $section));
    // $statement  = $db->prepare("INSERT INTO product(:productname, :mainPicutre, :previewPicture, :sidePicture, :price, :clothingsection);");
    $stmt->bindParam(':productname', $name);
    $stmt->bindParam(':mainpicture', $mainpicture);
    $stmt->bindParam(':previewpicture', $previewpicture);
    $stmt->bindParam(':sidepicture', $sidepicture);
    $stmt->bindParam(':price', $price);
    $stmt->bindParam(':clothingsection', $price);
    $stmt->execute();

    
    ?>