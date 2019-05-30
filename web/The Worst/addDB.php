<?php
    include 'connect.php';
    $name = $_POST['name'];
    if ($_POST['mainPicture'] != "") {
        $mainPicture = $_POST['mainPicture'];
    }
    else {
        echo "Main isn't set";
    }
    
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

    
    ?>