<?php
session_start();
require_once 'config.php';

if (!isset($_SESSION['s_user_name'])) {
  header('Location: login.php');
  exit();
}
?>
<?php
$id = $_GET['id'];
$con = mysqli_connect("localhost", "root", "", "joblagbe");
$query = "select * from jobs where id='$id'";
$data = mysqli_query($con, $query);
$result = mysqli_fetch_assoc($data);
?>
<?php include 'header.php'; ?>
<!DOCTYPE html>
<html lang="en">    
<head>
  <link rel="stylesheet" href="styles/dashboard.css">
    <title>Job Details</title>
</head>
<body>
    <!-- job heading -->
    <section>
        <div class="job-d-h">
            <h2>Job Details</h2>
        </div>
    </section>
    <!--job first row -->
    <section>
        <div class="job-r">
            <div class="j-r-l">
                <div class="j-des">
                  
                    <h3>Title: <?php echo $result["title"]; ?></h3>
                    <h4>Location:<?php echo $result["location"]; ?> </h4></li>
                    <h4 style="text-decoration: blink;">Salary: ৳ <?php echo $result["salary"]; ?></h4>
                    
                    <h4>Job description: </h4>
                    <p><?php echo $result["description"]; ?></p>
                </div>
            </div>
            <div class="j-r-r">
                <h4 style="color:black"><?php echo $result["company"];?></h4>

                <img src="./pic/<?php echo $result["p_img"];?>" class="img-logo_details_page" alt="...">
                
            </div>
        </div>
    </section>
    <section>
      <input type="button"><a class="login_btn" href="apply_job.php">Apply now</a></input>
      <input type="button"><a class="logout_btn" href="logout.php">Log out</a></input>
    </section>
    <?php include 'footer.php'; ?>
</body>
</html>
