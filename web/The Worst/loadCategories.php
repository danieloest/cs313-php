<?php
include 'connect.php';
$category = $_GET['category'];
// echo "this is the response??? The value sent was " . $category;
// echo "<br>!2";
// echo "<br>!3";   

$stmt - $db->prepare("SELECT productid, productname, previewpicture WHERE productid = :productid");
$stmt->execute(array(':productid' => $category));
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach ($rows as $clothing) {
    echo '<div class="container"><a href=clothing.php?id=' . $clothing['productid'] . '>';
    echo '<div class=imgContainer><img src="' . $clothing['previewpicture'] . '"></div>';
    echo '<div><p class="name">' . $clothing['productname'] . '</p></div>';
    echo '<button type="button" class="btn btn-default btn-sm">Add to Cart  <span class="glyphicon glyphicon-plus"></span></button>';
    echo '</a></div>';

}

?>