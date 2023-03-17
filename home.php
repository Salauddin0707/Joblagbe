<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="styles/dashboard.css">
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="styles/video.css">
        <!-- Fontawesome CDN Link -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JobLagbe</title>
</head>

<body>

<?php include_once('header.php');?>

    <div class="search_bar">
        <div class="search_bar_text">
            <div class="search_bar_text_1">
                <h1>Find a job near you</h1>
            </div>
            <div class="search_bar_text_2">
                <p> Simple, fast and efficient</p>
            </div>

            <div class="searchform">
                <form id="search" name="search" action="#" method="GET">
                    <div class="search_bar_main">

                        <div class="search_left">
                            <input class="form-control has-icon" name="q" placeholder="What ?" type="text" value="">
                        </div>

                        <input type="hidden" id="lSearch" name="l" value="">

                        <div class="search_middle">
                            <input class="form-control locinput input-rel searchtag-input has-icon" id="locSearch"
                                name="location" placeholder="Where ?" type="text" value="">
                        </div>

                        <div class="search_right">

                            <button class="search_right_btn">
                                <strong>Find</strong>
                            </button>

                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>

  <!-- box content section start -->
  <div class="container-2">
    <header class="haeading">
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


            <h2>Job Title: <?php echo $result["title"]; ?></h2>

                <img src="./pic/<?php echo $result["p_img"];?>" class="img-logo" alt="...">
                

            <p>Job location: <?php echo $result["location"]; ?> </p>

            <h4>Job salary: ৳ <?php echo $result["salary"]; ?></h4>

            <a class="know_btn" href="login.php?id=<?php echo $result["id"]; ?>">Know More</a>
          </div>

        </div>

        <!--ONE PRODUCT DESIGN END-->
      <?php } ?>
    </div>
  </div>

  <div class="vhead">
        <h1>May you like to visit.</h1>
    </div>

    
    <div class="video">
        
    <iframe class="vdo" src="https://www.youtube.com/embed/joKBaNqO2AI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <iframe class="vdo" src="https://www.youtube.com/embed/BqkGB2yCYTA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <iframe class="vdo" src="https://www.youtube.com/embed/m7INTT7I3Gg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <iframe class="vdo" src="https://www.youtube.com/embed/4mY38RimNfA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>


    <!-- footer section start -->
    <?php include_once('footer.php');?>
    
</body>

</html>