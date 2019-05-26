<?php
    $section = $_GET['section'];
    // echo 'We are looking for: ' . $section;
    $stmt = $db->prepare('SELECT price, previewPicture, clothingName FROM clothing WHERE clothingsection=:section');
    $stmt->execute(array(':section' => $_GET[$section]));
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach ($rows as $clothing) {
        echo "We are looking at: " . $clothing['clothingName'] . ". For $" . $clothing['price'];
        echo '<img src="' . $clothing['previewPicture'] . '">';

    }
?>