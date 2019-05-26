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
    <?php
        $id = $_GET['id'];
        $stmt = $db->prepare('SELECT clothingname, price, mainpicture, clothingid FROM clothing WHERE clothingid=:id');
        $stmt->execute(array(':id' => $id));
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($rows as $clothing) {
            echo '<h1 class="title">' . $clothing['clothingname'] . '</h1>';
            echo '<img src="' . $clothing['mainpicture'] . '">';
            echo '<p class="price">' . $clothing['price'] . '</p>';
    
        }
    ?>
</body>
</html>