<?php  

session_start();
require_once 'config.php';

if (!isset($_SESSION['s_user_name'])) {
  header('Location: admin_login.php');
  exit();
}

  if(isset($_POST['savebtn'])){
    $t_name=$_FILES['p_img']['tmp_name'];
    $file_name=$_FILES['p_img']['name'];
    move_uploaded_file($t_name,"./pic/$file_name");

    if(isset($_POST['savebtn'])){
      $save_job_data="INSERT INTO `jobs`(`title`, `description`, `company`, `location`, `salary`, `p_img`) VALUES ('$_POST[title]','$_POST[description]','$_POST[company]','$_POST[location]','$_POST[salary]','$file_name')";
      if(mysqli_query($conn,$save_job_data)){
        $message= "save success!";
      }else{
        echo "fail";
      }
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="styles/upload_job.css">
  <link rel="stylesheet" href="styles/styles.css">
</head>

<body>

  <?php include_once('header.php');?>

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
      <div class="job_upload_main">
        <div class="job_upload">
          <h1>Job Upload</h1>
          <form action="" method="post" enctype="multipart/form-data">
            <label for="">Title :</label>
            <input type="text" name="title"> <br>
            <label for="">Description:</label>
            <input type="text" name="description"> <br>
            <label for="">Company:</label>
            <input type="text" name="company"> <br>
            <label for="">Location: </label>
            <input type="text" name="location"> <br>
            <label for="">Salary: </label>
            <input type="text" name="salary"> <br>
            <label for="">Company logo</label>
            <input type="file" name="p_img"><br><br>
            <button type="submit" name="savebtn" value="save">SEND</button>    
</form>
          </form>
        </div>
      </div>
    </div>
  </div>
  <?php include_once('footer.php');?>
</body>

</html>