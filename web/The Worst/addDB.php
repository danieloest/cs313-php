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

    $statement  = $db->prepare("INSERT INTO product VALUES (:name, :mainPicutre, :previewPicture, :sidePicture, :price, :section);");
    $statement->execute(array(':name' => $name, ':mainPicture' => $mainPicture, ':previewPicture' => $previewPicture,':sidePicture' => sidePicture, ':price' => price, ':section' => $section));

    
    ?>