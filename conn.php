<?php
 
//MySQLi Procedural

$conn = mysqli_connect("localhost","root","","eclass");
mysqli_set_charset($conn,"utf-8");

mysqli_query($conn,"SET NAMES 'utf8'");
mysqli_query($conn,'SET character_set_connection=utf8');
mysqli_query($conn,'SET character_set_client=utf8');
mysqli_query($conn,'SET character_set_results=utf8');
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
 
?>