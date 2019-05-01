<?php
$activePage = basename($_SERVER['PHP_SELF'], ".php");

?>
<header>
<nav>
  <ul>
    <li class="<?= ($activePage == 'about-us') ? 'active':''; ?>"><a href="about-us.php">About us</a></li>
    <li class="<?= ($activePage == 'login') ? 'active':''; ?>"><a href="login.php">Login</a></li>
    <li class="<?= ($activePage == 'home') ? 'active':''; ?>"><a href="home.php">Home</a></li>
    <ul>
  
  </nav>
</header>