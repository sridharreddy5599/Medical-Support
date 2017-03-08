<?php 

$host = "localhost";

$user = "root";

$password = "toor";

$dbname = "medical_db";

$conn = mysqli_connect($host , $user , $password , $dbname);

if(!$conn){
	die("error in connection");
}

?>