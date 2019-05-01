<?php
session_start();
$userType = $_GET['userType'];
if ($userType != "logout") {
  $_SESSION["userType"] = $userType;
}
else {
  unset($_SESSION["userType"]);
}
header("Location: home.php");
?>