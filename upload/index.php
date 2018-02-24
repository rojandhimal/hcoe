<!DOCTYPE html>
<html>
<head>
	<title>Image/File Upload</title>
</head>
<body>
	<?php 
		include 'connection.php';
		if (isset($_POST['submit'])) {
			print_r($_FILES);
			 print_r($_POST);
			$name=$_FILES['image']['name'];
			$tmp_name=$_FILES['image']['tmp_name'];

			if (!empty($name)) {
				$location="images/";
				if (move_uploaded_file($tmp_name,$location.$name)) {
					$ins="INSERT into images (name) values ('$name')";
					$res=mysqli_query($con,$ins);
					if ($res) {
						echo "file uploaded successfully!!!";
					}
					else{
					echo "errrrrrrrrrr!!!!!!!!";
					}
				}else{
					echo "fail to move";
				}
				
			}else{
				echo "Empty file";
			}
		}
	 ?>
<form action="" method="POST" enctype="multipart/form-data">
<input type="file" name="image">
<input type="submit" name="submit" value="Upload File">
</form>
</body>
</html>