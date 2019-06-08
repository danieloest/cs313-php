<?php
session_start();
include 'connect.php';
$username = $_POST['username'];
// $pass = password_hash($_POST['password'], PASSWORD_DEFAULT);
$pass = $_POST['password'];

$statement = $db->prepare('SELECT username, pass FROM worstusers WHERE username=:username;');
$statement->bindValue(':username', $username);
$statement->execute();
$rows = $statement->fetchAll(PDO::FETCH_ASSOC);
header('Content-Type: application/json');
foreach ($rows as $row) {
    if (password_verify($pass, $row['pass']))
    {
        $_SESSION["username"] = $username;
        $data = "Success";
    }
    else
    {
        $data = "Incorrect username/password";
    }   
}
echo json_encode($data);

?>