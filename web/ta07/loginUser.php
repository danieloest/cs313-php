<?php
include 'connect.php';
$username = $_POST['username'];
$password = password_verify($_POST['password'], PASSWORD_DEFAULT);
$query = 'SELECT username FROM usersTeam WHERE username=:username AND password=:password;';
$statement = $db->prepare($query);
$statement->bindValue(':username', $username);
$statement->bindValue(':password', $password);
$statement->execute();
$rows = $statement->fetchAll(PDO::FETCH_ASSOC);
header('Content-Type: application/json');
echo "{response: '!!!!'}";
/*foreach ($rows as $clothing) {
    if ($rows['username'] == $username)
    {
        $data = "{response: 'Success'}";
        echo json_encode($data);
        
    }
    
    else
    {
        $data = "{response: 'Incorrect username/password.'}";
        echo json_encode($data);
    }

}*/
?>