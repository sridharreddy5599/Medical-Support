<?php 
$did = $_GET['id'];

//include dbconnect
include('../../class/dbconnect.php');

//create query

$query = "DELETE FROM diseases WHERE disease_id='$did'";

if(mysqli_query($conn ,$query)){
	
	header("location:../index.php");
}
else{
	echo "error in your query" . mysqli_error($conn);
	
}
mysqli_close($conn);
?>