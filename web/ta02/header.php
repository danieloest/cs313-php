<?php
// Get the current title of the page
$activePage = basename($_SERVER['PHP_SELF'], ".php");

?>
<header>
<nav>
  <ul>
    <!-- If $activePage is the title of the page, the link's class is "active". Else the class is "" -->
    <li class="<?= ($activePage == 'about-us') ? 'active':''; ?>"><a href="about-us.php">About us</a></li>
    <!-- <li class="<?= ($activePage == 'login') ? 'active':''; ?>"><a href="login.php">Login</a></li> -->
    <li class="<?= ($activePage == 'home') ? 'active':''; ?>"><a href="home.php">Home</a></li>
    <ul>
  
  </nav>
</header>