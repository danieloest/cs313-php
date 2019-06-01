<?php
include 'connect.php';
$category = (int)$_GET['category'];
$stmt = $db->prepare('SELECT productname, previewpicture, productid FROM product WHERE clothingsection=:section');
$stmt->execute(array(':section' => $category));
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach ($rows as $clothing) {
    echo '<div class="container"><a href=editItem.php?id=' . $clothing['productid'] . '>';
    echo '<div class=imgContainer><img src="' . $clothing['previewpicture'] . '"></div>';
    echo '<div><p class="name">' . $clothing['productname'] . '</p></div>';
    echo '<button type="button" class="btn btn-default btn-sm">Add to Cart  <span class="glyphicon glyphicon-plus"></span></button>';
    echo '</a></div>';

}
?>