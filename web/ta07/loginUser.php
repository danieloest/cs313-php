<?php
include 'connect.php';
$username = $_POST['username'];
// $pass = password_hash($_POST['password'], $dbPassword);

$query = ' SELECT username, pass FROM usersteam WHERE username=:username';
$statement = $db->prepare($query);
$statement->bindValue(':username', $username);
$statement->execute();
$rows = $statement->fetchAll(PDO::FETCH_ASSOC);
header('Content-Type: application/json');
// $test = "{'response': '!!!!'}";
// echo json_encode($test);
foreach ($rows as $row) {
        // $pass = password_verify($_POST['password'], $dbPassword);
        if (password_verify($pass, $row['password']))
        {
            $data = "{'response': 'Success'}";
        }
        else
        {
            $data = "{'response': 'Incorrect username/password.'}";
        }
        echo json_encode($data);
  

}

?>