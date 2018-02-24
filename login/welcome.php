<?php 
	session_start();
	if (!isset($_SESSION['name'])) {
		header('location:form.php');	
	}
	else{
		echo "Welcome ".$_SESSION['name'];

	}


 ?>
 <br>
 <a href="logout.php"><button>log out</button> </a>