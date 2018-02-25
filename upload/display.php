<?php 
include "connection.php";

$query = "SELECT * FROM images";
$res=mysqli_query($con,$query);
if(!$res){
	echo "Query failed";
}

while ($row = mysqli_fetch_assoc($res)) {
	$image = $row['name'];
?>


<table border="2px">
			<tr>
				<td>Image</td>
			</tr>
	
			<tr>
			<td><?php echo "<img  src='images/$image' alt='Image' width='100px' >";   ?></td>
			</tr>
		
	</tbody>
</table>



<?php
}

?>


/