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
	$sql_stat="DELETE FROM student WHERE Registration_No='$id' ";
//Step 5: Execute the SQL Statement
	$result=@mysqli_query($con, $sql_stat) ;

//refresh records
	header("location:view.php");
//Step 6:Closiing Connection
	@mysqli_close($con);

}
?>