<?php
include 'connect.php';
$username = $_POST['username'];
$pass = password_hash($_POST['password'], PASSWORD_DEFAULT);
$query = 'INSERT into usersTeam(username, pass) VALUES (:username, :pass)';
$statement = $db->prepare($query);
$statement->bindValue(':username', $username);
$statement->bindValue(':pass', $pass);
$statement->execute();
?>