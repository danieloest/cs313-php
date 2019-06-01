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
    <form action="editDB.php" method="POST">
    <?php
    include 'connect.php';
    include 'header.php';
    $id = $_GET['id'];
    $product;
    $stmt = $db->prepare('SELECT productname, price, mainpicture, previewpicture, sidepicture, productid, clothingsection FROM product WHERE productid=:id');
    $stmt->execute(array(':id' => $id));
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach ($rows as $clothing) {
        $product = $clothing;
        echo '
        <div class="form-group">
        <label for="name">Product Name</label>
        <input type="text" class="form-control" name="name" id="" aria-describedby="helpId" placeholder="" value="' . $product['productname'] .  '">
      </div>
      <div class="form-group">
        <label for="main">Main Picture</label>
        <input type="text" class="form-control" name="main" id="" aria-describedby="helpId" placeholder="" value="'. $product['mainpicture'] .'">
      </div>
      <div class="form-group">
        <label for="preview">Preview Picture</label>
        <input type="text" class="form-control" name="preview" id="" aria-describedby="helpId" placeholder="" value="'. $product['previewpicture'] .'">
      </div>
      <div class="form-group">
        <label for="side">Side Picture</label>
        <input type="text" class="form-control" name="side" id="" aria-describedby="helpId" placeholder="" value="'. $product['sidepicture'] .'">
      </div>
      <label for="price">Price</label>
            <input type="number"
              class="form-control" name="price" id="" aria-describedby="helpId" placeholder="" step="0.01" min=0 value="' . $product['price'] . '">
          </div>';
          echo '<select>';
          foreach ($db->query('SELECT sectionname, sectionid  FROM clothingsection') as $clothing) {
            echo '<option value="' . $clothing['sectionid'] . '"';
            if ($clothing['sectionid'] == $product['clothingsection']) {
                echo ' selected';
            }
            echo '>'. $clothing['sectionname'] .'</option>';
        }
        echo '</select>';

    } ?>
    <input type="submit" value="Update Item">
    </form>
</body>
</html>