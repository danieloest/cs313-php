<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Add Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="homePage.css">
    <title>About Me</title>
</head>
<body>
    <?php
    include 'header.php'
    ?>
    <p class="bio">I am a senior majoring in Software Engineering. Besides programming, I love to listen to music. My favorite artists are Hippo Campus and Wallows.</p>
    <h2>My Favorite Ablums</h2>
    <!-- Slideshow of favorite ablums -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
        <div class="item active">
            <img src="https://f4.bcbits.com/img/a3135933789_10.jpg" alt="Landmark by Hippo Campus">
            <div class="carousel-caption">
                <h4>Landmark</h4>
                <h5>Hippo Campus</h5>
            </div>
        </div>

        <div class="item">
            <img src="https://snworksceo.imgix.net/ohi/a545ccb7-ca71-4c90-a60a-dd10421b4821.sized-1000x1000.jpg?w=1000" alt="Nothing Happens by Wallows">
            <div class="carousel-caption">
                <h4>Nothing Happens</h4>
                <h5>Wallows</h5>
            </div>
        </div>

        <div class="item">
            <img src="https://img.apmcdn.org/f7761d321002ff6a223a28b8e636e5cc4621296c/uncropped/3bc86f-20181117-hippo-campus-bambi.jpg" alt="Bambi by Hippo Campus">
            <div class="carousel-caption">
                <h4>Bambi</h4>
                <h5>Hippo Campus</h5>
            </div>
        </div>


        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</body>
</html>