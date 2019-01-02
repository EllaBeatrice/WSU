<?php
//step 1: Get data from the form. 
if (isset($_POST['Upload'])) // test incase the button is clicked
{
  $Heading=$_POST['Heading'];
  $Details=$_POST['Details'];

//Step 2: Connect to MYSQL server
  $con= @mysqli_connect("localhost","root","") or die(mysqli_error());
//Step 3: Select the database
$db= @mysqli_select_db($con,"world_shine_usa") or die(mysqli_error());
//Step4: Writting SQL Statement

$db= @mysqli_select_db($con,"world_shine_usa") or die(mysqli_error());
 $sql_stat="INSERT INTO page1 VALUES ('$Heading','$Details')";
//Step 5: Execute the SQL Statement
  $result=@mysqli_query($con, $sql_stat) or die(mysqli_error());
  if($result){
    //echo "student Successfully Registered";
    ?>
    <script type="text/javascript">
      alert(" SuSccessfully Uploaded")
    </script>
    <?php
    include_once("");
  }
}
//Step 6:Closiing Connection
  @mysqli_close($con);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Page</title>
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
                width: 950px;
                height:600px;
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
                width: auto;
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
              #textarea{
                border:none;
                border-bottom:1px solid #fff;
                background:transparent;
                outline:none;
                color:#fff;
                font-size:16px;
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
       <h2>Edit Page </h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group ">
                <label>Heading</label>
                <input type="text" name="Heading" class="form-control" value="" required="">
                <span class="help-block"></span>
           
            <label>Details</label>
            <textarea class="form-control" rows="7" cols="50" id="textarea" name="Details"></textarea><br>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Upload">
            </div>
            <p><a href="">View Pages</a></p>
        </form>
    </div>    
</body>
</html>