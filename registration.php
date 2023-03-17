<?php  

session_start();
require_once 'config.php';

if (isset($_SESSION['s_user_name'])) {
  header('Location: home.php');
  exit();
}

  if(isset($_POST['savebtn'])){

	$save_job_data="INSERT INTO `employee`(`name`, `fullname`, `email`, `password`, `phone_number`, `address`) VALUES ('$_POST[name]','$_POST[fullname]','$_POST[email]','$_POST[password]','$_POST[phone_number]','$_POST[address]' )";
	if(mysqli_query($conn,$save_job_data)){ 
		$message= "save success!";
	}else{
		echo "fffff";
	}
  }
?>

<h2>Job Seeker Registration</h2>
	<form action="" method="post">
		<label for="name">User Name:</label><br>
		<input type="text" id="name" name="name" required><br><br>

		<label for="name">Full Name:</label><br>
		<input type="text" id="name" name="fullname" required><br><br>

		<label for="email">Email Address:</label><br>
		<input type="email" id="email" name="email" required><br><br>

		<label for="password">Password:</label><br>
		<input type="password" id="password" name="password" required><br><br>

		<label for="phone">Phone Number:</label><br>
		<input type="tel" id="phone" name="phone_number" required><br><br>

		<label for="address">Address:</label><br>
		<textarea id="address" name="address" required></textarea><br><br>

		<input type="submit" name="savebtn" value="Submit">
	</form>
</form>

