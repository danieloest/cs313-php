<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="worst.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <title>The Worst</title>
</head>
<body>
    <form action="editDB.php?id=<?php echo $id; ?>" method="POST">
    <?php
    include 'connect.php';
    include 'header.php';
    $id = $_GET['id'];
    echo '<form action="editDB.php?id=' . $id . '" method="POST">';
    $product;
    $stmt = $db->prepare('SELECT productname, price, mainpicture, previewpicture, sidepicture, productid, clothingsection FROM product WHERE productid=:id');
    $stmt->execute(array(':id' => $id));
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach ($rows as $clothing) {
        $product = $clothing;
        echo '
        <div class="form-group">
        <label for="productname">Product Name</label>
        <input type="text" class="form-control" name="productname" id="productname" aria-describedby="helpId" placeholder="" value="' . $product['productname'] .  '">
      </div>
      <div class="form-group">
        <label for="mainpicture">Main Picture</label>
        <input type="text" class="form-control" name="mainpicture" id="mainpicture" aria-describedby="helpId" placeholder="" value="'. $product['mainpicture'] .'">
      </div>
      <div class="form-group">
        <label for="previewpicture">Preview Picture</label>
        <input type="text" class="form-control" name="previewpicture" id="previewpicture" aria-describedby="helpId" placeholder="" value="'. $product['previewpicture'] .'">
      </div>
      <div class="form-group">
        <label for="sidepicture">Side Picture</label>
        <input type="text" class="form-control" name="sidepicture" id="sidepicture" aria-describedby="helpId" placeholder="" value="'. $product['sidepicture'] .'">
      </div>
      <label for="price">Price</label>
            <input type="number"
              class="form-control" name="price" id="price" aria-describedby="helpId" placeholder="" step="0.01" min=0 value="' . $product['price'] . '">
          </div>';
          echo '<div class="form-group">
          <label for="clothingsection">Section</label> <select class="form-control" name="clothingsection" id="clothingsection">';
          foreach ($db->query('SELECT sectionname, sectionid  FROM clothingsection') as $clothing) {
            echo '<option value="' . $clothing['sectionid'] . '"';
            if ($clothing['sectionid'] == $product['clothingsection']) {
                echo ' selected';
            }
            echo '>'. $clothing['sectionname'] .'</option>';
        }
        echo '</select></div>';

    } ?>
    <input type="submit" value="Update Item" class="btn btn-info">
    </form>
    <br>
    <a href="deleteDB.php?id=<?php echo $id ?>" class="btn btn-danger" role="button">Delete</a>
</body>
</html>