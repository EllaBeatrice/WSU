<?php 
//when getting from a we use get
if (isset($_GET['Registration_No']))
{
$id=$_GET['Registration_No'];
//Step 2: Connect to MYSQL server
	$con= @mysqli_connect("localhost","root","") or die(mysqli_error());
//Step 3: Select the database
	
	
	$db= @mysqli_select_db($con,"world_shine_usa") or die(mysqli_error());
//Step4: Writting SQL Statement
	$sql_stat="SELECT * FROM student WHERE Registration_No='$id' ";
//Step 5: Execute the SQL Statement
	$result=@mysqli_query($con, $sql_stat) ;
// split the records into individual fields
	$row=@mysqli_fetch_array($result);
//Step 6:Closiing Connection
	@mysqli_close($con);
?>
<h3>Registration No:<?php echo $row[0];?></h3>
<form name="form1" action="update.php" method="post">
		<br>
		<input type="hidden" name="Registration_No" value="<?php echo $row[0];?>" >
		<br><br>
		<input type="text" name="Fname" value="<?php echo $row[1];?>" >
		<br><br>
		<input type="text" name="Lname" value="<?php echo $row[2];?>" >
		<br><br>
		<input type="date" name="dob" value="<?php echo $row[3];?>" >
		<br><br>
		<input type="text" name="Program" value="<?php echo $row[4];?>" >
		<br><br>
		<select name="Gender">
			<OPTION value="F">Female</OPTION>
			<OPTION value="M">Male</OPTION>
		</select>
		<br><br>
		<input type="text" name="Email" value="<?php echo $row[6];?>" >
		<br><br>
		<input type="text" name="Phone_No" value="<?php echo $row[7];?>" >
		<br><br>
		<button type="submit" name="Update">Update Student Record</button>
	</form>
<?php
}
?>