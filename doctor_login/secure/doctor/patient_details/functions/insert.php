<?php

//add dbconnect

include('../../class/dbconnect.php');

$patient_id = $_POST['patient_id'];

$patient_name = $_POST['patient_name'];

$disease = $_POST['disease'];

$medicine_name = $_POST['medicine_name'];

$contact = $_POST['contact'];

$email = $_POST['email'];


//create query

$query = "INSERT INTO patient_details(patient_id ,patient_name, disease, medicine_name, contact, email) VALUES('$patient_id' , '$patient_name', '$disease', '$medicine_name', '$contact', '$email' )";

if(mysqli_query($conn ,$query)){
	header("location:../index.php");
}
else{
	echo "error in query" . mysqli_error($conn);
}
mysqli_close($conn);
?>