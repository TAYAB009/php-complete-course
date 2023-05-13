<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$name = $_POST["name"];
	$email = $_POST["email"];    
    echo "Email is : {$email}";
}
$db = mysqli_connect('localhost', 'tayab', 'SYSTEMS_ENGINEER', 'users');

if ($db == false) {
    die('Database connection faild!');
}
echo 'Database Connected! </br>';

$sql = 'SELECT * FROM users';

$sqlInsert = "INSERT INTO users VALUES(0,'{$name}', '{$email}')";
if (mysqli_query($db, $sqlInsert)) {
    echo "Record Inserted"."</br>";
}else {
    echo "An Error has occured"."</br>";
}




$result = mysqli_query($db, $sql);
echo "ID" . "&nbsp;&nbsp;&nbsp;" . "Name" . "&nbsp;&nbsp;&nbsp;" ."Email"."</br>";
while ($row = mysqli_fetch_array($result)) {
   
    echo $row['id'] . "&nbsp;&nbsp;&nbsp;" . $row['name'] . "&nbsp;&nbsp;&nbsp;" . $row['email']."</br>";

}








?>
