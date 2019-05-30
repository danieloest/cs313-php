<?php
    $section = $_GET['section'];
    $stmt = $db->prepare('SELECT clothingname, price, previewpicture, clothingid FROM product WHERE clothingsection=:section');
    $stmt->execute(array(':section' => $section));
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach ($rows as $clothing) {
        echo '<div class="container"><a href=clothing.php?id=' . $clothing['clothingid'] . '>';
        echo '<div class=imgContainer><img src="' . $clothing['previewpicture'] . '"></div>';
        echo '<div><p class="name">' . $clothing['clothingname'] . '   $' . $clothing['price'] . '</p></div>';
        echo '<button type="button" class="btn btn-default btn-sm">Add to Cart  <span class="glyphicon glyphicon-plus"></span></button>';
        echo '</a></div>';

    }
?>