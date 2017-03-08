<?php 
//iclude dbconnection
include('../../class/dbconnect.php');

$disease_id = $_GET['disease_id'];
$disease_name = $_GET['disease_name'];
$symptoms = $_GET['symptoms'];
$severity = $_GET['severity'];

//create query
$query = "UPDATE diseases SET disease_name='$disease_name' ,symptoms='$symptoms' ,severity='$severity' WHERE disease_id ='$disease_id'";

if(mysqli_query($conn ,$query)){
	header("location:../index.php");
	
} else {
	echo "error in your query" . mysqli_error($conn);
}
mysqli_close($conn);
?>