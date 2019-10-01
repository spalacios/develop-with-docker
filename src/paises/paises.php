<?php 

$mysqli = new mysqli('172.21.0.1', 'root', 'password','itec_test', 3306);

if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}


$username = $_POST['username'];
$password = $_POST['password'];

$pass=  md5($password);

$query = "SELECT * FROM users WHERE username = '$username AND  password = '$pass';";

echo $query;die;


$query = "SELECT * FROM paises ORDER BY nombre DESC;";


$result = $mysqli->query($query);

//var_dump($result);
//die();
echo '<select id="combo" >';
while ($row = $result->fetch_assoc()){
    echo '<option value="'.row['id'].'">'.utf8_encode($row['nombre']).' ('.$row['iso'].')</option>';
}
echo '</select>';

