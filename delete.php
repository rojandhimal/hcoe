<?php 
	include 'sample.php';
	$id=$_GET['id'];
	$query="DELETE FROM example WHERE id='$id'";
	$res=mysqli_query($connect,$query);
	if($res){
		// echo "data at index ".$id." deleted successfully";
		header('location: display.php');
	}
	else{
		echo "An error occurred!! Data was not deleted!!";
	}
 ?>