<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JobLagbe</title>
    <link rel="stylesheet" href="styles/contact.css" >
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body>

    <?php include_once('header.php');?>

    <div class="contact_main">
        <h1> Contact Us!</h1>
        <p>We are always dedicated to contact with you as soon as possible. Thank you for contact with us</p>
        <div class="contact_box">
            <div class="contact_left">
                <h3>Sent Your Request</h3>
                <form action="">
                    <div class="input_row">
                        <div class="input_group">
                            <label for="">Name</label>
                            <input type="text">

                        </div>

                        <div class="input_group">
                            <label for="">Phone</label>
                            <input type="text">

                        </div>

                    </div>

                    <div class="input_row">
                        <div class="input_group">
                            <label for="">Email</label>
                            <input type="text">

                        </div>

                        <div class="input_group">
                            <label for="">Subject</label>
                            <input type="text">

                        </div>

                    </div>
                    <div class="massege">
                        <label for="">Massage</label>
                    <textarea name="" id="" cols="" rows="5"></textarea>
                    <button type="submit">SEND</button>

                    </div>
                    
                </form>

            </div>
            <div class="contact_right">
                <h3>Reach Us</h3>
                <table>
                    <tr>
                        <td>Email</td>
                        <td>contactus@example.com</td>

                    </tr>
                    <tr>
                        <td>Phone</td>
                        <td>019********</td>

                    </tr>
                    <tr>
                        <td>Adress</td>
                        <td>17/2, Gulshan, Dhaka, Bangladesh</td>

                    </tr>

                </table>

            </div>
        </div>
    </div>


    <?php include_once('footer.php');?>
    
</body>
</html>