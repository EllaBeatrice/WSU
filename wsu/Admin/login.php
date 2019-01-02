<?php

// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: index.php");
    exit;
}
 
// Include config file
require_once  "config.php";
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, username, password FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            
                            // Redirect user to welcome page
                            header("location: index.php");
                        } else{
                            // Display an error message if password is not valid
                            $password_err = "The password you entered was not valid.";
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $username_err = "No account found with that username.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
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
                height: 420px;
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
       <h2><b>Admin Login</b></h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Username</label>
                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" class="form-control">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
            <p><a href="register.php">Sign up</a></p>
        </form>
    </div>    
</body>
</html>