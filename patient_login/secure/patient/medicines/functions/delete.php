<?php 
$mid = $_GET['id'];

//include dbconnect
include('../../class/dbconnect.php');

//create query

$query = "DELETE FROM medicines WHERE medicine_id='$mid'";

if(mysqli_query($conn ,$query)){
	
	header("location:../index.php");
}
else{
	echo "error in your query" . mysqli_error($conn);
	
}
mysqli_close($conn);
?>