<?php
	include 'sample.php';
	if(isset($_GET['submit']))
	{
		$fname=$_GET['fname'];
		$lname=$_GET['lname'];
		$address=$_GET['address'];
		$contact=$_GET['contact'];

		$query="insert into example(firstname,lastname,address,contact)
		values('$fname','$lname','$address','$contact')";
		$res=mysqli_query($connect,$query);
		if($res)
		{
			echo "data stored in database";
		}
		else
		{
			echo "not stored!!!!";
		}

	}
	?>
<form method="GET" action='#'>
	<input type="text" name="fname" placeholder="enter first name">
	<br><br>
	<input type="text" name="lname" placeholder="enter last name">
	<br><br>
	<input type="text" name="address" placeholder="enter your address">
	<br><br>
	<input type="text" name="contact" placeholder="enter your contact">
	<br><br>
	<input type="submit" name="submit" value="insert into database">

</form>


<a href="display.php">VIew all user</a>