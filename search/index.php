<!DOCTYPE html>
<html>
<head>
	<title>Database Search</title>
</head>
<body>
	<?php 
		$con=mysqli_connect('127.0.0.1','root','','hcoe');
		if (isset($_POST['submit'])) {
			$search=$_POST['search_data'];
			if (!empty($search)) {
				$sel="SELECT name from users where name like '%$search%'";
				$res=mysqli_query($con,$sel);
				$check=mysqli_num_rows($res);
				if ($check==0) {
					echo "nothing found!!!!";
				}
				else{
					while($row=mysqli_fetch_assoc($res)){
						echo $row['name']."<br>";
					}
				}
			}
			else{
				echo "please enter something!!!!!";
			}
		}
	 ?>
<form method="POST">
	<input type="text" name="search_data" placeholder="search...">
	<input type="submit" name="submit" value="search">
</form>
</body>
</html>