<?php
include "config.php";
session_start();

if (!isset($_SESSION['s_user_name'])) {
  header('Location: admin_login.php');
  exit();
}

  $select_data="SELECT * FROM `employee`";
  
  $result=mysqli_query($conn,$select_data);
  


if(isset($_GET['id'])){
	$delete_user_data="DELETE FROM `employee` WHERE id='$_GET[id]' ";
	if(mysqli_query($conn,$delete_user_data)){
		echo "delete success!";
	}else{
		echo "fail";
	}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="styles/styles.css">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>JobLagbe</title>
</head>

<body>

  <?php include_once('header.php'); ?>

  <div class="wrapper">
    <div class="sidebar">
    <ul>
        <li><a href="admin_home.php"><i class="fas fa-home"></i>Home</a></li>
        <li><a href="view_job.php"><i class='fas fa-list'></i>Job List</a></li>
        <li><a href="upload_job.php"><i class='fas fa-file-upload'></i>Upload Jobs</a></li>
        <li><a href="view_employee.php"><i class='fas fa-list'></i>Users</a></li>
        <li><a href="admin_logout.php"><i class="fas fa-sign-out-alt"></i>Log Out</a></li>
      </ul>
    </div>
    <div class="main_content">
      <h1 class="joblist_h1"> User list </h1>
      <br>
      <!--<a class="button" href="">Add Jobs</a>-->
      <br>

      <table class="table">

        <tr>
          <td> ID </td>
          <td> name </td>
          <td> email </td>
          <td> password </td>
          <td> phone </td>
          <td> address </td>
          <td> Action </td>
        </tr>

        <?php while ($rec_data = mysqli_fetch_assoc($result)) { ?>
          <tr>
            <td> <?php echo $rec_data['id']; ?> </td>
            <td> <?php echo $rec_data['name']; ?> </td>
            <td> <?php echo $rec_data['email']; ?> </td>
            <td> <?php echo $rec_data['password']; ?> </td>
            <td> <?php echo $rec_data['phone_number']; ?> </td>
            <td> <?php echo $rec_data['address']; ?> </td>
            <td> <a href="?id=<?php echo $rec_data['id']; ?>">Delete</a></td>
          </tr>
        <?php } ?>
      </table>
    </div>

  </div>

  <?php include_once('footer.php'); ?>

</body>

</html>