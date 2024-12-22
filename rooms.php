<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel - ROOMS</title>
    
  <?php require('include/links.php')?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    
</head>
<body class="bg-light">
    <!---------------- header ---------------> 
        <?php require('include/header.php')?>

     <div class="my-5 px-4">
        <h2 Class=" fw-bold h-font text-center"> OUR ROOMS</h2>
        <div class="h-line bg-dark"></div>
    </div>

    <div class="container">
        <div class="row">

             <!------------------left side -------------------->
            <div class="col-lg-3 col-md-12 mb-lg-0 mb-4 px-lg-0">
                <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow ">
                    <div class="container-fluid flex-lg-column align-items-stretch">
                        <h4 class="mt-2">FILTERS</h4>
                        <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#filterdropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse flex-column mt-2 align-item-stretch" id="filterdropdown">
                            <!----------------CHECK AVAILABILITY ---------------> 
                            <div class="border bg-light p-3 rounded mb-3 w-100">
                                <h5 class="mb-3" style="font-size:18px;">CHECK AVAILABILITY</h5>
                                <label class="form-label" >Check-in</label>
                                <input type="date" class="form-control shadow-none mb-3">
                                <label class="form-label" >Check-out</label>
                                <input type="date" class="form-control shadow-none">
                            </div>
                            
                            <!----------------FACILITIES ---------------> 
                            <div class="border bg-light p-3 rounded mb-3 w-100">
                                <h5 class="mb-3" style="font-size:18px;">FACILITIES</h5>
                                <div class="mb-2">
                                    <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
                                    <label class="form-check-label" for="f1">Television</label>
                                </div>
                                <div class="mb-2">
                                    <input type="checkbox" id="f2" class="form-check-input shadow-none me-1">
                                    <label class="form-check-label" for="f2">Room heater</label>
                                </div>
                                <div class="mb-2">
                                    <input type="checkbox" id="f3" class="form-check-input shadow-none me-1">
                                    <label class="form-check-label" for="f3">Wifi</label>
                                </div>
                            </div>
                            <!-------------------GUESTS------------------> 
                            <div class="border bg-light p-3 rounded mb-3 w-100">
                                <h5 class="mb-3" style="font-size:18px;">GUESTS </h5>
                                <div class="d-flex">
                                    <div class="me-3">
                                        <label class="form-label" >Adults</label>
                                        <input type="number" class="form-control shadow-none">
                                    </div>
                                    <div>
                                        <label class="form-label" >Children</label>
                                        <input type="number" class="form-control shadow-none">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <!------------------right side -------------------->
            <div class="col-lg-9 col-md-12 px-4">

            <?Php
          require('include/dbconfig.php');

          $_query = "select * from room";
          $query_run = mysqli_query($connection,$_query);
          $check_room = mysqli_num_rows($query_run) > 0;

          if($check_room)
          {
              while($row = mysqli_fetch_assoc($query_run))
              {
                ?>
                  <div class="card mb-4 border-0 shadow" >
                        <div class="row g-0 p-3 align-items-center">
                            
                            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                                <img src="images/rooms/<?php echo $row['img']; ?>" class="img-fluid rounded" >
                            </div>
                            <!------------------ -------------------->
                            <div class="col-md-5 px-lg-3 px-md-3 px-0">
                                <h5 class="mb-3"><?php echo $row['name']; ?></h5>
                                <!------------------Features -------------------->
                                <div class="features mb-3">
                                    <h6 class="mb-1">Features</h6>
                                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                                        <?php echo $row['features']; ?>
                                        </span>
                                </div>
                                <!------------------Facilities -------------------->
                                <div class="facilities mb-3">
                                    <h6 class="mb-1">Facilities</h6>
                                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                                        <?php echo $row['facilities']; ?>
                                        </span>
                                </div>
                            </div>
                            <!------------------ -------------------->
                            <div class="col-md-2 text-center mt-lg-0 mt-0 mt-4">
                                <h6 class="mb-4"><?php echo $row['price']; ?></h6>
                                <a href="booking.php" class="btn btn-sm w-100 text-white coustem-bg shadow-none mb-2">Boook Now</a>
                                <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More details</a>
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
            </div>

        </div>
    </div>

     <!--------------- footer -------------------->
    <?php require('include/footer.php')?>
</body>
</html>