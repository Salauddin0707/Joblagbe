


<?php
include "config.php";
session_start();

if (!isset($_SESSION['s_user_name'])) {
  header('Location: admin_login.php');
  exit();
}
$a=$_SESSION['s_user_name'];
  $select_data="SELECT * FROM `jobs`";
  
  $result=mysqli_query($conn,$select_data);
  


if(isset($_GET['id'])){
	$delete_course_data="DELETE FROM `jobs` WHERE id='$_GET[id]' ";
	if(mysqli_query($conn,$delete_course_data)){
		echo "delete success!";
	}else{
		echo "fffff";
	}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="styles/styles.css">
  <!-- Fontawesome CDN Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>JobLagbe</title>
</head>

<body>

  <?php include_once('header.php');?>

  <!-- admin pannel start -->
  <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
  <h2 style="text-align: center; background:#00afff; color:white;">Welcome, <?php echo $a ?>!</h2>
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
      <h1 class="joblist_h1">Job Listings</h1> <br>
        <table class="table">
          <thead>
            <tr>
              <th>Title</th>
              <th>Company</th>
              <th>Location</th>
              <th>Salary</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
          <?php  while($rec_data=mysqli_fetch_assoc($result)){ ?>
           <tr>
              <td><?php echo $rec_data['title']; ?></td>
              <td><?php echo $rec_data['company']; ?></td>
              <td> <?php echo $rec_data['location']; ?>  </td>
              <td> <?php echo $rec_data['salary']; ?>  </td>
              <td>
                <!--<a href="edit_job_listing.php?id=<?php /* echo $job_listing['id']; */?>">Edit</a>-->
                <a href="?id=<?php echo $rec_data['id']; ?>" >Delete</a>
              </td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
    </div>
  
  </div>

  <?php include_once('footer.php');?>

</body>

</html>