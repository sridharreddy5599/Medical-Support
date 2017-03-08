<?php

//add dbconnect

include('../../class/dbconnect.php');

$disease_id = $_POST['disease_id'];

$disease_name = $_POST['disease_name'];

$symptoms = $_POST['symptoms'];

$severity = $_POST['severity'];



//create query

$query = "INSERT INTO diseases(disease_id ,disease_name, symptoms, severity) VALUES('$disease_id' , '$disease_name', '$symptoms', '$severity' )";

if(mysqli_query($conn ,$query)){
	header("location:../index.php");
}
else{
	echo "error in query" . mysqli_error($conn);
}
mysqli_close($conn);
?>