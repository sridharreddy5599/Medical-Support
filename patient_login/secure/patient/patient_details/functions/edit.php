<?php 
//iclude dbconnection
include('../../class/dbconnect.php');

$patient_id = $_GET['patient_id'];
$patient_name = $_GET['patient_name'];
$disease = $_GET['disease'];
$medicine_name = $_GET['medicine_name'];
$contact = $_GET['contact'];
$email = $_GET['email'];

//create query
$query = "UPDATE patient_details SET patient_name='$patient_name' ,disease='$disease' ,medicine_name='$medicine_name' ,contact='$contact' ,email='$email' WHERE patient_id ='$patient_id'";

if(mysqli_query($conn ,$query)){
	header("location:../index.php");
	
} else {
	echo "error in your query" . mysqli_error($conn);
}
mysqli_close($conn);
?>