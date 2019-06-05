<?php
include 'connect.php';
$username = $_POST['username'];
// $pass = password_hash($_POST['password'], PASSWORD_DEFAULT);
$pass = $_POST['password'];

$query = 'SELECT username, pass FROM usersteam WHERE username=:username';
$statement = $db->prepare($query);
$statement->bindValue(':username', $username);
$statement->execute();
$rows = $statement->fetchAll(PDO::FETCH_ASSOC);
header('Content-Type: application/json');
$data = "outside foreach";
foreach ($rows as $row) {
    $data = "inside for each";
    if (password_verify($pass, $row['pass']))
    {
        $data = "{'response': 'Success'}";
    }
    else
    {
        $data = "{'response': 'Incorrect username/password.'}";
    }   
}
echo json_encode($data);

?>