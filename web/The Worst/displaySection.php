<?php
    $section = $_GET['section'];
    // echo 'We are looking for: ' . $section;
    $stmt = $db->prepare('SELECT clothingname, price, previewpicture FROM clothing WHERE clothingsection=:section');
    $stmt->execute(array(':section' => $section));
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach ($rows as $clothing) {
        echo '<div class="container">';
        echo '<div class=imgContainer><img src="' . $clothing['previewpicture'] . '"></div>';
        echo '<div><p class="name">' . $clothing['clothingname'] . ' ' . $clothing['price'] . '</p></div>';
        echo '</div>';
        // echo "We are looking at: " . $clothing['clothingname'] . ". For $" . $clothing['price'];
        // echo '<img src="' . $clothing['previewpicture'] . '">';

    }
?>