<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel - ABOUT</title>
    
  <?php require('include/links.php')?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
    

</head>
<body class="bg-light">
    <!---------------- header ---------------> 
        <?php require('include/header.php')?>
        <style>
            .box{
                border-top-color:var(--teal) !important;
            }
        </style>

     <div class="my-5 px-4">
        <h2 Class=" fw-bold h-font text-center">ABOUT US</h2>
        <div class="h-line bg-dark"></div>
    </div>

    <?Php
          require('include/dbconfig.php');

          $_query = "select * from aboutinfo";
          $query_run = mysqli_query($connection,$_query);
          $check_room = mysqli_num_rows($query_run) > 0;

          if($check_room)
          {
            if($row = mysqli_fetch_assoc($query_run))
            {
            ?>
            <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-6 col-md-5 mb-5 order-lg-1 order-md-1 order-2">
                    <h3 class="mb-3">About Hotel</h3>
                    <p><?php echo $row['text']; ?></p>
                </div>
                <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-md-2 order-1">
                    <img src="images/about/<?php echo $row['img']; ?>" class="w-100">
                </div>
            </div>
        </div>
        <?php
            }
          }
          else{
            echo "no recored found";
          }
        ?>


    <!-- <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-6 col-md-5 mb-5 order-lg-1 order-md-1 order-2">
                <h3 class="mb-3">About Hotel</h3>
                <p>
                "Our dedicated team of hospitality enthusiasts at Hotel is committed to ensuring your travel dreams come true. We're here to make your stay as memorable and enjoyable as possible, with top-notch service and a wide selection of accommodations."
                </p>
            </div>
            <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-md-2 order-1">
                <img src="images/about/about.jpg" class="w-100">
            </div>
        </div>
    </div> -->


    <div class="container mt-5">
    <div class="row">
    <?Php
          require('include/dbconfig.php');

          $_query = "select * from abouts";
          $query_run = mysqli_query($connection,$_query);
          $check_room = mysqli_num_rows($query_run) > 0;

          if($check_room)
          {
              while($row = mysqli_fetch_assoc($query_run))
              {
                ?>
                  <div class="col-lg-3 col-md-6 mb-4 px-4">
                    <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                        <img src="images/about/<?php echo $row['img']; ?>" width="70px">
                        <h4 class="mt-3"><?php echo $row['name']; ?></h4>
                    </div>
                </div> 
              <?php
              }
          }
          else{
            echo "no recored found";
          }
        ?>

        </div>
        </div>

    <h3 class="my-5 fw-bold h-font text-center">MANAGEMENT TEAM</h3>

    <div class="container px-4">
        <!-- Swiper -->
        <div class="swiper mySwiper">
            <div class="swiper-wrapper mb-5">
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="images/about/team.jpg" class="w-100"> 
                    <h5 class="mt-2">Random Name</h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="images/about/team.jpg" class="w-100"> 
                    <h5 class="mt-2">Random Name</h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="images/about/team.jpg" class="w-100"> 
                    <h5 class="mt-2">Random Name</h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="images/about/team.jpg" class="w-100"> 
                    <h5 class="mt-2">Random Name</h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="images/about/team.jpg" class="w-100"> 
                    <h5 class="mt-2">Random Name</h5>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
            </div>
     <!--------------- footer -------------------->
    <?php require('include/footer.php')?>

    <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
  var swiper = new Swiper(".mySwiper", {
   
    spaceBetween: 40,
    pagination: {
      el: ".swiper-pagination",
    },
    breakpoints: {
        320: {
          slidesPerView: 1,
        },
        640: {
          slidesPerView: 1,
        },
        768: {
          slidesPerView: 3,
        },
        1024: {
          slidesPerView: 3,
        },
      }
  });
</script>
    
</body>
</html>