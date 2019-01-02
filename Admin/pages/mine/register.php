<?php 
//step 1: Get data from the form. 
if (isset($_POST['Register'])) // test incase the button is clicked
{
  $reg=$_POST['Registration_No'];
  $Fname=$_POST['Fname'];
  $Lname=$_POST['Lname'];
  $dob=$_POST['dob'];
  $Program=$_POST['Program'];
  $Gender=$_POST['Gender'];
  $Email=$_POST['Email'];
  $Phone_No=$_POST['Phone_No'];
//Step 2: Connect to MYSQL server
  $con= @mysqli_connect("localhost","root","") or die(mysqli_error());
//Step 3: Select the database
  }
  
  $db= @mysqli_select_db($con,"world_shine_usa");
//Step4: Writting SQL Statement
  $sql_stat="INSERT INTO student VALUES ('$reg','$Fname','$Lname','$dob','$Program','$Gender','$Email','$Phone_No')";
//Step 5: Execute the SQL Statement
  $result=@mysqli_query($con, $sql_stat) or die(mysqli_error());
  if($result){
    //echo "student Successfully Registered";
    ?>
    <script type="text/javascript">
      alert("student Successfully Registered")
    </script>
    <?php
    include_once("view.php");
  }

//Step 6:Closiing Connection
  @mysqli_close($con);


?>