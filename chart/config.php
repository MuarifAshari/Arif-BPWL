<?php

$databaseHost = 'localhost';
$databaseName = 'pmb';
$databaseUsername = 'root';
$databasePassword = '';

$conn = new mysqli($databaseHost, $databaseUsername, $databasePassword, $databasePassword);
if($conn -> connect_errno){
	echo die ("gagal menghubungkan ke database". $conn->connect_error);
}

?>