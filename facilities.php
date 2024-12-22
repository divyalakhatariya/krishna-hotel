<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel - FACILITIES</title>
    
  <?php require('include/links.php')?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <style>
    .pop:hover{
       border-top-color:var(--teal) !important; 
       transform:scale(1.03);
       transition:all 0.3s;
    }
    </style>
</head>
<body class="bg-light">
    <!---------------- header ---------------> 
        <?php require('include/header.php')?>

     <div class="my-5 px-4">
        <h2 Class=" fw-bold h-font text-center">OUR FACILITIES</h2>
        <div class="h-line bg-dark"></div>
    </div>


    <div class="container">
    <div class="row">
    <?Php
          require('include/dbconfig.php');

          $_query = "select * from fac";
          $query_run = mysqli_query($connection,$_query);
          $check_room = mysqli_num_rows($query_run) > 0;

          if($check_room)
          {
              while($row = mysqli_fetch_assoc($query_run))
              {
                ?>
                  <div class="col-lg-4 col-md-6 mb-5 px-4">
                    <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                        <div class="d-flex align-items-center mb-2">
                            <img src="images/facilities/<?php echo $row['img']; ?>" width="40px">
                            <h5 class="m-0 ms-3"><?php echo $row['name']; ?></h5>
                        </div>
                        <p><?php echo $row['text']; ?></p>
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

     <!--------------- footer -------------------->
    <?php require('include/footer.php')?>

    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
</body>
</html>