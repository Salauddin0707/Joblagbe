<?php
 if(isset($_POST['btn'])){
include "config.php";

$login_sql="SELECT * FROM `employee` WHERE email='$_POST[email]' and password='$_POST[password]'";

$result=mysqli_query($conn,$login_sql);
$final_result=mysqli_fetch_assoc($result);
if($final_result){
	  session_start();
	 $_SESSION["s_user_name"]= $final_result['name'];
	
	 header('Location: dashboard.php');
}else{
	echo "user or pass error";
}

 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="styles/user_login.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JobLagbe</title>
</head>
<body>

    <?php include_once('header.php');?>

    <div class="login_form">
    <div class="center">
      <h1>Login</h1>

<form action="" method="post">
<div class="txt_field">
<input type="email" name="email" required> 
<span></span>
           <label for="">Username</label>
        </div>
        <div class="txt_field">
<input type="password" name="password" required>
<span></span>
          <label for="">Password</label>
        </div>
          <div class="pass">Forgot Password?</div>
<input type="submit" name="btn" value="login">
<div class="signup_link">
            Not a member? <a href="register.php">Signup</a>
        </div> 

</form>
</div>
</div>
</form>

<?php include_once('footer.php');?>

</body>
</html>