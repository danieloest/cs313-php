<?php
    include 'connect.php';
    $name = $_POST['name'];
    $mainpicture = $_POST['mainPicture'];    
    $previewpicture = $_POST['previewPicture'];
    $sidepicture = $_POST['sidePicture'];
    $price = (float)$_POST['price'];
    $section = (int)$_POST['section'];
    
    
    echo $name . '<br>';
    echo $mainpicture . '<br>';
    echo $previewpicture . '<br>';
    echo $sidepicture . '<br>';
    var_dump($price);
    echo $price . '<br>';
    var_dump($section);
    echo $section . '<br>';

    $statement  = $db->prepare("INSERT INTO product (productname, mainpicture, previewpicture, sidepicture, price, clothingsection) VALUES (:productname, :mainpicutre, :previewpicture, :sidepicture, :price, :clothingsection);");
    // $statement->execute(array(':productname' => $name, ':mainpicture' => $mainpicture, ':previewpicture' => $previewpicture,':sidepicture' => $sidepicture, ':price' => $price, ':clothingsection' => $section));
    // $statement  = $db->prepare("INSERT INTO product(:productname, :mainPicutre, :previewPicture, :sidePicture, :price, :clothingsection);");
    $stmt->bindValue(':productname', $name);
    $stmt->bindValue(':mainpicture', $mainpicture);
    $stmt->bindValue(':previewpicture', $previewpicture);
    $stmt->bindValue(':sidepicture', $sidepicture);
    $stmt->bindValue(':price', $price);
    $stmt->bindValue(':clothingsection', $price);
    $statement->execute();

    
    ?>