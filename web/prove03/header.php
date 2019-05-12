<?php
    $activePage = basename($_SERVER['PHP_SELF'], ".php");
?>

<div class="jumbotron">
    <h1 class="text-center">Welcome to ZMart!</h1>
    <div class="navbar">
        <ul class="nav nav-pills nav-justified">
            <li id="home" class="<?= ($activePage == 'browse') ? 'active':''; ?>">
                <a href=" browse.php">
                    <h4>Home</h4>
                </a> 
            </li> 
            <li id="cart" class="<?= ($activePage == 'cart') ? 'active':''; ?>">
                <a href="cart.php">
                    <h4>View Cart<span class="glyphicon glyphicon-shopping-cart"></span></h4>
                </a>
            </li>
        </ul>
    </div>
</div>
