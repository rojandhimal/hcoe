<?php 
	session_start();
	if (isset($_POST['submit'])) {
		$con=mysqli_connect('127.0.0.1','root','','admin');
		$name=$_POST['uname'];
		$pass=$_POST['upass'];
		$query="SELECT username,password from users where username='$name' AND password='$pass'";
		$res=mysqli_query($con,$query);
		$count=mysqli_num_rows($res);
		if($count==0){
			echo "error!!! no users found!!!!";
		}
		else{
			$_SESSION['name']=$name;
			header('location:welcome.php');
		}
	}
	else{
		echo "illegal connection!!!";
	}
 ?>//