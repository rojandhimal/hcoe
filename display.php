<?php
include 'sample.php';
?>
<table border='1px'>
<tr>
	<td>id</td>
	<td>first_name</td>
	<td>last_name</td>
	<td>address</td>
	<td>contact</td>
	<td>update data</td>
	<td>delete data</td>
</tr>
<tr>
<?php
	$query="select * from example order by id asc";
	$res=mysqli_query($connect,$query);
	while($row=mysqli_fetch_assoc($res)){
?>
	
	<td><?php echo $row['id']; ?></td>
	<td><?php echo $row['firstname']; ?></td>
	<td><?php echo $row['lastname']; ?></td>
	<td><?php echo $row['address']; ?></td>

	<td><?php echo $row['contact']; ?></td>
	<td><a href="update.php?id=<?php echo $row['id'];?>">update</a></td>
	<td><a href="delete.php?id=<?php echo $row['id'];?>" onclick="return confirm('Do you want to delete this data permanently????? ')">delete</a></td>
	</tr>
<?php

	}
	?>
	</table>
