<?php
session_start();
require_once 'config.php';

if (!isset($_SESSION['s_user_name'])) {
  header('Location: login.php');
  exit();
}
$a= ($_SESSION['s_user_name']);
?>



<!DOCTYPE html>
<html>
<link rel="stylesheet" href="styles/dashboard.css">

<head>


</head>

<body>
<?php include_once('header.php');?>
  <div class="container-2">
    <header class="haeading">
    <h1 style="text-align: left;">Welcome, <?php echo $a ?></h1>
      <h1 style="text-align: center;">All Jobs</h1>
    </header>

    <!--show jobs from database-->
    <?php

    $con = mysqli_connect("localhost", "root", "", "joblagbe");
    $query = "select * from jobs";
    $data = mysqli_query($con, $query);

    ?>


    <div class="job-row">
      <?php while ($result = mysqli_fetch_assoc($data)) { ?>

        <!--ONE PRODUCT DESIGN START-->
        <div class="joc">

          <div class="description">


            <h2>Title: <?php echo $result["title"]; ?></h2>

            <img src="./pic/<?php echo $result["p_img"];?>" class="img-logo" alt="...">
                

            <p>Location: <?php echo $result["location"]; ?> </p>

            <h4>Salary: ৳ <?php echo $result["salary"]; ?></h4>

            <a class="know_btn" href="job_details.php?id=<?php echo $result["id"]; ?>">Know More</a>
          </div>

        </div>

        <!--ONE PRODUCT DESIGN END-->
      <?php } ?>
    </div>
  </div>

  <?php include_once('footer.php');?>
</body>

</html>