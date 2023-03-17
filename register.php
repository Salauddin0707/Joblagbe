


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/registration.css">
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body>

  <?php include_once('header.php');?>

<div class="registration_main">
    <div class="registration">
        <h1>Job Seeker Registration</h1>
        <form action="registration.php" method="post">
            <label for="name">User Name:</label>
            <input type="text" id="name" name="name" required><br><br>
    
            <label for="name">Full Name:</label>
            <input type="text" id="name" name="fullname" required><br><br>
    
            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" required><br><br>
    
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br><br>
    
            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone_number" required><br><br>
    
            <label for="address">Address:</label>
            <textarea id="address" name="address" required></textarea><br><br>
    
            <button type="submit" name="savebtn" value="Submit">SUBMIT</button>
        </form>
    </div>
</div>

<?php include_once('footer.php');?>    

</body>
</html>


