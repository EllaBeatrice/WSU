<?php
//Step 2: Connect to MYSQL server
	$con= @mysqli_connect("localhost","root","") or die(mysqli_error());
//Step 3: Select the database
	$db=@mysqli_select_db( $con, "world_shine_usa") or die(mysqli_error());
//Step4: Writting SQL Statement
	$sql_stat="SELECT * FROM student";
//Step 5: Execute the SQL Statement
	$result=@mysqli_query($con, $sql_stat);

		?>
		<table name="display" border="2">
			<tr><th>Registration NO</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Date of Birth</th>
				<th>Program</th>
				<th>Gender</th>
				<th>Email Address</th>
				<th>Contact</th>
				<th colspan="2">Actions</th>
			</tr>
		<?php
		//Step 6: Write the records into individual fields
	while ($row=@mysqli_fetch_array($result)) {
	?>
	<tr>
		<td><?php echo $row[0];?></td>
		<td><?php echo $row[1];?></td>
		<td><?php echo $row[2];?></td>
		<td><?php echo $row[3];?></td>
		<td><?php echo $row[4];?></td>
		<td><?php echo $row[5];?></td>
		<td><?php echo $row[6];?></td>
		<td><?php echo $row[7];?></td>
		<td><?php echo "<a href='delete.php?Registration_No=$row[0]'>Delete</a>";?></td>
		<td><?php echo "<a href='edit.php?Registration_No=$row[0]'>Edit</a>";?></td>
	</tr>
	<?php
	}
?>
</table><br>
<a href="index.php">Add new lecturer</a>