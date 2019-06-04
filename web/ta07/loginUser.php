<?php
include 'connect.php';
$username = $_POST['username'];
$pass = password_verify($_POST['password'], PASSWORD_DEFAULT);
// $query = 'SELECT username FROM usersTeam WHERE username=:username AND pass=:pass;';
$query = ' SELECT username FROM usersteam WHERE username=:username AND pass=:pass;
$statement = $db->prepare($query);
$statement->bindValue(':username', $username);
$statement->bindValue(':pass', $pass);
$statement->execute();
$rows = $statement->fetchAll(PDO::FETCH_ASSOC);
header('Content-Type: application/json');
// $test = "{'response': '!!!!'}";
// echo json_encode($test);
foreach ($rows as $row) {
    if ($row['username'] == $username)
    {
        $data = "{'response': 'Success'}";
        echo json_encode($data);
        
    }
    
    else
    {
        $data = "{'response': 'Incorrect username/password.'}";
        echo json_encode($data);
    }

}
?>