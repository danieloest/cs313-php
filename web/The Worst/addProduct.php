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
    <?php include 'connect.php';?>
    <?php include 'header.php';?>
    <form action="addDB.php" method="post">
        <div class="form-group">
          <label for="name">
              Product Name
          </label>
          <input type="text" class="form-control" name="name" id="" aria-describedby="helpId" placeholder="Product Name">
        </div>
        <div class="form-group">
          <label for="mainPicture">
              Main Picture
          </label>
          <input type="text" class="form-control" name="mainPicture" id="" aria-describedby="helpId" placeholder="Product Name">
        </div>
        <div class="form-group">
            <label for="previewPicture">
              Preview Picture
            </label>
             <input type="text" class="form-control" name="previewPicture" id="" aria-describedby="helpId" placeholder="Product Name">
        </div>
        <div class="form-group">
            <label for="sidePicture">
              Side Picture
            </label>
             <input type="text" class="form-control" name="sidePicture" id="" aria-describedby="helpId" placeholder="Product Name">
        </div>
        <div class="form-group">
          <label for="price">Price</label>
          <input type="number"
            class="form-control" name="price" id="" aria-describedby="helpId" placeholder="">
        </div>
        <div class="form-group">
          <label for="section">Clothing Section</label>
          <select class="form-control" name="section" id="">
              <?php
              // Display the sections. Query from database
              foreach ($db->query('SELECT sectionname, sectionid  FROM clothingsection') as $clothing) {
                echo '<option value=' . $clothing['sectionid'] . '>' . $clothing['sectionname'] . '</option>';
        }
              ?>
          </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>
</html>