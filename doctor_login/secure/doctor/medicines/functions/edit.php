<?php 
//iclude dbconnection
include('../../class/dbconnect.php');

$medicine_id = $_GET['medicine_id'];
$medicine_name = $_GET['medicine_name'];
$disease = $_GET['disease'];
$dosage = $_GET['dosage'];
$description = $_GET['description'];

//create query
$query = "UPDATE medicines SET medicine_name='$medicine_name' ,disease='$disease' ,dosage='$dosage' ,description='$description' WHERE medicine_id ='$medicine_id'";

if(mysqli_query($conn ,$query)){
	header("location:../index.php");
	
} else {
	echo "error in your query" . mysqli_error($conn);
}
mysqli_close($conn);
?>