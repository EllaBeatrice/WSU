<!DOCTYPE html>
<html>
<head>
	<title>Student Registration</title>
</head>
<body>
	<h1>REGISTER STUDENTS DETAILS:</h1>
	<form name="form1" action="register.php" method="post">
		<br>
		<input type="text" name="Registration_No" value="" placeholder="Enter Registration_No">
		<br><br>
		<input type="text" name="Fname" value="" placeholder="Enter First Name">
		<br><br>
		<input type="text" name="Lname" value="" placeholder="Enter Last Name">
		<br><br>
		<input type="date" name="dob" value="" placeholder="Select Date of Birth">
		<br><br>
		<input type="text" name="Program" value="" placeholder="Enter Program">
		<br><br>
		<select name="Gender">
			<OPTION value="F">Female</OPTION>
			<OPTION value="M">Male</OPTION>
		</select>
		<br><br>
		<input type="text" name="Email" value="" placeholder="Enter Email Address">
		<br><br>
		<input type="text" name="Phone_No" value="" placeholder="Enter Phone_No">
		<br><br>
		<button type="submit" name="Register">Register Student</button>
	</form><br>
	<a href="view.php">View Registered Students</a>
</body>
</html>