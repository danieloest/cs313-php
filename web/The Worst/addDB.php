<?php
    include 'connect.php';
    $name = $_POST['name'];
    $mainPicture = $_POST['mainPicture'];    
    $previewPicture = $_POST['previewPicture'];
    $sidePicture = $_POST['sidePicture'];
    $price = (float)$_POST['price'];
    $section = (int)$_POST['section'];
    
    
    echo $name . '<br>';
    echo $mainPicture . '<br>';
    echo $previewPicture . '<br>';
    echo $sidePicture . '<br>';
    var_dump($price);
    echo $price . '<br>';
    var_dump($section);
    echo $section . '<br>';

    $statement  = $db->prepare("INSERT INTO product (productname, mainpicture, previewpicture, sidepicture, price, clothingsection) VALUES (:productname, :mainPicutre, :previewPicture, :sidePicture, :price, :clothingsection);");
    // $statement  = $db->prepare("INSERT INTO product(:productname, :mainPicutre, :previewPicture, :sidePicture, :price, :clothingsection);");
    // $stmt->bindValue(':productname', $name, PDO::PARAM_STR);
    // $stmt->bindValue(':mainpicture', $mainPicture, PDO::PARAM_STR);
    // $stmt->bindValue(':previewpicture', $previewPicture, PDO::PARAM_STR);
    // $stmt->bindValue(':sidepicture', $sidePicture, PDO::PARAM_STR);
    // $stmt->bindValue(':price', $price, PDO::PARAM_STR);
    // $stmt->bindValue(':clothingsection', $price, PDO::PARAM_STR);

    $statement->execute(array(':productname' => $name, ':mainpicture' => $mainPicture, ':preview[icture' => $previewPicture,':sidePicture' => $sidePicture, ':price' => $price, ':clothingsection' => $section));

    
    ?>