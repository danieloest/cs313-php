<?php
session_start();
// Get the variable passed in from the URL
$userType = $_GET['userType'];
// If it isn't "logout", save the type of user
if ($userType != "logout") {
  $_SESSION["userType"] = $userType;
}
// If we are logging out, unset the session variable
else {
  unset($_SESSION["userType"]);
}
// Redirect to home.php
header("Location: home.php");
?>