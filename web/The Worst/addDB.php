<?php
    include 'connect.php';
    $name = $_POST['name'];
    $mainPicture = $_POST['mainPicture'];    
    $previewPicture = $_POST['previewPicture'];
    $sidePicture = $_POST['sidePicture'];
    $price = $_POST['price'];
    $section = $_POST['section'];
    
    
    echo $name . '<br>';
    echo $mainPicture . '<br>';
    echo $previewPicture . '<br>';
    echo $sidePicture . '<br>';
    echo $price . '<br>';
    echo $section . '<br>';

    $statement  = $db->prepare("INSERT INTO product(name, mainPicture, previewPicture, sidePicture, price, section) VALUES (:name, :mainPicutre, :previewPicture, :sidePicture, :price, :section);");
    // $stmt->bindValue(':name', $name, PDO::PARAM_STR);
    // $stmt->bindValue(':mainPicture', $mainPicture, PDO::PARAM_STR);
    // $stmt->bindValue(':previewPicture', $previewPicture, PDO::PARAM_STR);
    // $stmt->bindValue(':sidePicture', $sidePicture, PDO::PARAM_STR);
    // $stmt->bindValue(':price', $price, PDO::??);
    $statement->execute(array(':name' => $name, ':mainPicture' => $mainPicture, ':previewPicture' => $previewPicture,':sidePicture' => $sidePicture, ':price' => $price, ':section' => $section));

    
    ?>