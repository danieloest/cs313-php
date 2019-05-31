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
    <?php
    include 'connect.php';
    include 'header.php';
    ?>
    <select name="" id="selector" onchange="loadCategory()">
        <?php
        foreach ($db->query('SELECT sectionname, sectionid  FROM clothingsection') as $clothing) {
            echo '<option value="' . $clothing['sectionid'] . '">'. $clothing['sectionname'] .'</option>';
        }
        ?>
    </select>
    <script>
    function loadCategory() {
        alert("in load category");
        var e = document.getElementById("selector");
        var value = e.options[e.selectedIndex].value;
        alert("Value: " + value);
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
            // document.getElementById("demo").innerHTML = this.responseText;
            console.log(this.responseText);
            }
        };
        xhttp.open("GET", "loadCategories.php?category=" + value, true);
        xhttp.send();
    }
    </script>
</body>
</html>