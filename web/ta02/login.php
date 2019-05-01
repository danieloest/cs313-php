<?php
session_start();
$_SESSION["userType"] = $_GET['userType'];
header("Location: home.php");
?>