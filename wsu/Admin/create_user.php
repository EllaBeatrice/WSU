<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
<title>Create user</title>
	<style>
          body{
        margin:0;
        padding:0;
        background-image:url('img/1.JPEG');
        background-size: cover;
        font-family:sans-serif;

      }
      .loginbox {
        position: absolute;
          top: 50%; 
        left: 50%; 
        transform: translate(-50%,-50%);
        padding: 80px 40px;
        width: 350px;
        height: 550px;
        color:#fff;
        box-sizing: border-box;
        background: rgba(0,0,0,0.5);
        }
      .user {
        width:100px;
        height:100px;
        border-radius:50%;
        position:absolute;
        top:-50px;
        left: calc(50%);
        right: calc(50%);
      }
      h2 {
        margin:0;
        padding:0 0 20px;
        text-align:center;
        font-size:22px;
      }
      .loginbox p{
        margin:0;
        padding:0;
        font-weight:bold;
      }

      .loginbox input{
        width:100%;
        margin-bottom:20px;
      }
      .loginbox input[type="text"], input[type="password"], input[type="email"] {
        
        border:none;
        border-bottom:1px solid #fff;
        background:transparent;
        outline:none;
        height:40px;
        color:#fff;
        font-size:16px;
      }

      .loginbox input[type="submit"] {
        
        border:none;
        outline:none;
        height:40px;
        background:#1c8acb;
        color:#fff;
        font-size:18px;
        border-radius:20px;
      }

      .loginbox input[type="submit"]:hover {
        
        cursor:pointer;
        background:#39dc79;
        color:#000;
      }

      .loginbox a {
        
        text-decoration:none;
        font-size:14px;
        color:#fff;
      }
      .loginbox a:hover {
        
        color:#39dc79;
      }

      .success-msg{
        border:1px solid #0ebc6f;
        background:#0ebc6f;
        color:#ffffff;
        font-size:13px;
        padding:2px;
      }
	</style>
</head>
<body>
	<div class="loginbox">
		<h2>Admin - create user</h2>
	
	
	<form method="post" action="register.php" name="login_form">

		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="<?php echo $username; ?>" required >
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>" required>
		</div>
		<div class="input-group">
			<label>User type</label>
			<select name="user_type" id="user_type" required>
				<option value=""></option>
				<option value="admin">Admin</option>
				<option value="user">User</option>
			</select>
		</div><br>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1" required="">
		</div>
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="password_2" required="">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="register_btn"> + Create user</button>
		</div>

	</form>
	</div>
</body>
</html>