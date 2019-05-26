<?php
    $section = $_GET['section'];
    // echo 'We are looking for: ' . $section;
    $stmt = $db->prepare('SELECT clothingName, price, previewPicture FROM clothing WHERE clothingsection=:section');
    $stmt->execute(array(':section' => $section));
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach ($rows as $clothing) {
        echo "We are looking at: " . $clothing['clothingName'] . ". For $" . $clothing['price'];
        echo $clothing['clothingName'];
        echo $clothing['previewPicture'];
        echo '<img src="' . $clothing['previewPicture'] . '">';

    }
?>