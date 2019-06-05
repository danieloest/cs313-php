<?php
include 'connect.php';
$username = $_POST['username'];
$pass = password_hash($_POST['password'], PASSWORD_DEFAULT);
$passConfirm = password_hash($_POST['passwordConfirm'], PASSWORD_DEFAULT);
if ($pass != $passConfirm)
{
    header('Location: signup.php?error=1');
    die();
}
else 
{
    $query = 'INSERT into usersTeam(username, pass) VALUES (:username, :pass)';
    $statement = $db->prepare($query);
    $statement->bindValue(':username', $username);
    $statement->bindValue(':pass', $pass);
    $statement->execute();
}
?>