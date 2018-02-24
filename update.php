<?php
	include 'sample.php';
	$id=$_GET['id'];
	$sel="SELECT * FROM example WHERE id='$id'";
	$res=mysqli_query($connect,$sel);
	$row=mysqli_fetch_assoc($res);
	?>
	<form method="GET" action='#'>
	<input type="hidden" name="id" value="<?php echo $row['id'];?>">
	<input type="text" name="fname" value="<?php echo $row['firstname'];?>"><br><br>
	<input type="text" name="lname" placeholder="enter last name"
	value=<?php echo $row['lastname'];?>><br><br>
	<input type="text" name="address" placeholder="enter your address" value=
	<?php echo $row["address"];?>><br><br> 
	<input type="text" name="contact" placeholder="enter your contact"
	value=<?php echo $row['contact'];?>><br><br>
	<input type="submit" name="update" value="update database">

</form>
<?php
	if(isset($_GET['update'])){
		$id=$_GET['id'];
		$fname=$_GET['fname'];
		$lname=$_GET['lname'];
		$address=$_GET['address'];
		$contact=$_GET['contact'];

		$query="UPDATE example SET firstname='$fname',lastname='$lname',address='$address',contact='$contact'
				WHERE id='$id'";
		$result=mysqli_query($connect,$query);
		if($result){
				echo "data is updated!!";
				header("Location: display.php");
		}
	else{
		echo"error while updating data!!!";
	}

	}
