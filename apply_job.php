<?php
session_start();
$a =  $_SESSION['s_user_name'];

require_once 'config.php';
if(mysqli_error($conn)) {
    echo mysqli_error($conn);
}


if (!isset($_SESSION['s_user_name'])) {
    header('Location: login.php');
    exit();
}

if (isset($_POST['savebtn'])) {
    $t_name = $_FILES['cover_letter']['tmp_name'];
    $file_name = $_FILES['cover_letter']['name'];
    move_uploaded_file($t_name, "./resume/$file_name");

    // Get the job ID from the form
    $job_id = $_POST['job_id'];
   
    $job_seeker_id = $_SESSION['s_user_id'];
    echo "$job_seeker_id";
    // Get the job seeker ID from the session
    

    // Get the application date from the form
    $application_date = $_POST['application_date'];

    // Insert the application data into the database
    $save_job_data = "INSERT INTO job_applications (job_id, job_seeker_id, cover_letter, application_date)
        VALUES ('$job_id', '$job_seeker_id', '$file_name', '$application_date')";

    if (mysqli_query($conn, $save_job_data)) {
        header('location: logout.php');
        //header('Location: job_details.php?id=' . $job_id);
        $message = "save success!";
        
        exit();
    } else {
        $error = "Error: Failed to apply for job. Please try again later.";
    }
}

// Get the job ID from the query string
$job_id = $_GET['id'] ?? '';

?>
<!-- HTML form to apply for job -->
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="styles/apply_job.css">
    <?php include "header.php" ?>
    <meta charset="UTF-8">
    <title>Apply for Job</title>
</head>
<body>
    <h1>Welcome <?php echo $a ?>! </h1>
    <?php if (isset($error)) { ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php } ?>

    <div class="apply_main">
    <div class="apply">
    <h2>Apply for Job</h2>
    <form method="post" action="" enctype="multipart/form-data">
        <input type="hidden" name="job_id" value="<?php echo $job_id; ?>">
        <label for="cover_letter">Cover Letter:</label><br>
        <input type="file" name="cover_letter"><br><br>
        <label for="application_date">Application Date:</label><br>
        <input type="date" id="application_date" name="application_date"><br><br>
        <input type="hidden" name="job_seeker_id" value="<?php echo "$a"; ?>"> <br>
        <input class="apply_button" type="submit" name="savebtn" value="Apply">
    </form>
    </div>
    </div>

    <?php include "footer.php" ?>
</body>
</html>






