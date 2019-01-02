<?php
//step 1: Get data from the form. 
if (isset($_POST['Upload'])) // test incase the button is clicked
{
  $Heading=$_POST['Heading'];
  $Details=$_POST['Details'];

//Step 2: Connect to MYSQL server
  $con= require_once "config.php";
//Step 3: Select the database
$db= @mysqli_select_db($con,"world_shine_usa") or die(mysqli_error());
//Step4: Writting SQL Statement
 if(!$db){
  echo "error".my;
 }
}
//Step 6:Closiing Connection
  @mysqli_close($con);
?>