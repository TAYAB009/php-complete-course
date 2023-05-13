<?php
$serverName = 'localhost';
$user = 'tayab';
$password = 'SYSTEMS_ENGINNER';
$database = 'hospital';

$connection = new mysqli($serverName, $user, $password, $database);
echo gettype($connection);

?>