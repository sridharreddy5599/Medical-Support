<?php

//add dbconnect

include('../../class/dbconnect.php');

$medicine_id = $_POST['medicine_id'];

$medicine_name = $_POST['medicine_name'];

$disease = $_POST['disease'];

$dosage = $_POST['dosage'];

$description = $_POST['description'];


//create query

$query = "INSERT INTO medicines(medicine_id ,medicine_name, disease, dosage, description) VALUES('$medicine_id' , '$medicine_name', '$disease', '$dosage', '$description' )";

if(mysqli_query($conn ,$query)){
	header("location:../index.php");
}
else{
	echo "error in query" . mysqli_error($conn);
}
mysqli_close($conn);
?>