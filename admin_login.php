<?php include_once('header.php'); ?>
<?php
if (isset($_POST['btn'])) {
  include "config.php";

  $login_sql = "SELECT * FROM `admins` WHERE user_email='$_POST[email]' and user_pass='$_POST[password]'";

  $result = mysqli_query($conn, $login_sql);
  $final_result = mysqli_fetch_assoc($result);
  if ($final_result) {
    session_start();
    $_SESSION["s_user_name"] = $final_result['user_name'];

    header('Location: admin_home.php');
  } else {
    echo "Invalid user or password";
  }
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="styles/admin_login.css">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

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
        </form>


    </div>
  </div>


  <?php include_once('footer.php'); ?>
</body>

</html>