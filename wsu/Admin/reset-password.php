<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
 
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$new_password = $confirm_password = "";
$new_password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate new password
    if(empty(trim($_POST["new_password"]))){
        $new_password_err = "Please enter the new password.";     
    } elseif(strlen(trim($_POST["new_password"])) < 6){
        $new_password_err = "Password must have atleast 6 characters.";
    } else{
        $new_password = trim($_POST["new_password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm the password.";
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($new_password_err) && ($new_password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
        
    // Check input errors before updating the database
    if(empty($new_password_err) && empty($confirm_password_err)){
        // Prepare an update statement
        $sql = "UPDATE users SET password = ? WHERE id = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "si", $param_password, $param_id);
            
            // Set parameters
            $param_password = password_hash($new_password, PASSWORD_DEFAULT);
            $param_id = $_SESSION["id"];
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Password updated successfully. Destroy the session, and redirect to login page
                session_destroy();
                header("location: login.php");
                exit();
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
    <title>Reset Password</title>
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
                height: 500px;
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
               .loginbox input[type="reset"] {
                
                border:none;
                outline:none;
                height:40px;
                background:#1c8acb;
                color:#fff;
                font-size:18px;
                border-radius:20px;
              }
              .loginbox input[type="reset"]:hover {
                
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
        <h2>Reset Password</h2>
        <p>Please fill out this form to reset your password.</p><br>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"> 
            <div class="form-group <?php echo (!empty($new_password_err)) ? 'has-error' : ''; ?>">
                <label>New Password</label>
                <input type="password" name="new_password" class="form-control" value="<?php echo $new_password; ?>">
                <span class="help-block"><?php echo $new_password_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control">
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <a class="btn btn-link" href="welcome.php">Cancel</a>
            </div>
        </form>
    </div>    
</body>
</html>