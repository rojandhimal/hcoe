<?php 
	session_start();

	echo "my favorite color is: ".$_SESSION['favcolor'];
	echo "<br>my favorite animal is: ".$_SESSION['favanimal'];

	session_unset();
 ?>
 <a href="index.php">Go back<<</a>