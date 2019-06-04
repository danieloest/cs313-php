<?php
include 'connect.php';
$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$query = 'SELECT username FROM usersTeam WHERE username=:username AND password=:password;';
$statement = $db->prepare($query);
$statement->bindValue(':username', $username);
$statement->bindValue(':password', $password);
$statement->execute();
$rows = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach ($rows as $clothing) {
    header('Content-Type: application/json');
    if ($rows['username'] == $username)
    {
        $data = "Success";
        echo json_encode($data);
        
    }
    
    else
    {
        $data = "Incorrect username/password.";
        echo json_encode($data);
    }

}
?>