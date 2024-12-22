<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel - CONTACT</title>
    
  <?php require('include/links.php')?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    
</head>
<body class="bg-light">
    <!---------------- header ---------------> 
        <?php require('include/header.php')?>

     <div class="my-5 px-4">
        <h2 Class=" fw-bold h-font text-center">CONTACT US</h2>
        <div class="h-line bg-dark"></div>
    </div>

    <div class="container">
        <div class="row">
        <!--------------- left side -------------------->

        <?Php
          require('include/dbconfig.php');

          $_query = "select * from contact";
          $query_run = mysqli_query($connection,$_query);
          $check_room = mysqli_num_rows($query_run) > 0;

          if($check_room)
          {
            if($row = mysqli_fetch_assoc($query_run))
            {
            ?>
            <!-------------------map--------------------->
            <div class="col-lg-6 col-md-6 mb-2 px-4">
                <div class="bg-white rounded shadow p-4 border">
                    <iframe class="w-100 rounded mb-4" height="320px" src="<?php echo $row['map']; ?>" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                 <!----------------Address----------------->

                    <h5>Address</h5>
                    <a href="https://goo.gl/maps/nkeR6BmHwBNS853SA" target="_blank" class="d-inline-block     text-decoration-none text-dark mb-2">
                    <i class="bi bi-geo-alt-fill"></i><?php echo $row['address']; ?>
                    </a>

                 <!----------------Call us----------------->
                    <h5 class="mt-4">Call us</h5>
                    <a href="tel: +917778889991" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i><?php echo $row['pno1']; ?>
                    </a>
                    <br>
                    <a href="tel: +917778889991" class="d-inline-block text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i><?php echo $row['pno2']; ?>
                    </a>

                    <!-------------------E-mail--------------------->
                    <h5 class="mt-4">Email</h5>
                    <a href="mailto:ask.abc@gamil.com" class="d-inline-block text-decoration-none text-dark"><i class="bi bi-envelope-fill"></i> <?php echo $row['email']; ?></a>

                     <!---------------Follow us--------------------->
                     <h5 class="mt-4">Follow us</h5>
                        <a href="#" class="d-inline-block  text-dark fs-5 me-2">
                            <i class="bi bi-twitter me-1"></i>
                        </a>
            
                        <a href="#" class="d-inline-block text-dark fs-5 me-2">
                            <i class="bi bi-facebook me-1"></i>
                        </a>
                        
                        <a href="#" class="d-inline-block text-dark fs-5 ">
                            <i class="bi bi-instagram me-1"></i>
                        </a>
                </div>
            </div>
        <?php
            }
          }
          else{
            echo "no recored found";
          }
        ?>

        <!--------------- right side -------------------->
            <div class="col-lg-6 col-md-6 px-4">
                <div class="bg-white rounded shadow p-4 border">
                   <form action="contact_us.php" method="post">
                        <h5>Send a message</h5>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight:500;">Name</label>
                            <input type="text" name="name" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight:500;">Email</label>
                            <input type="email" name="email" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight:500;">subject</label>
                            <input type="text" name="subject" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight:500;">Message</label>
                            <textarea class="form-control shadow-none" rows="7"  name=" message" style="resize:none;"></textarea>
                        </div>
                        <button type="submit" class="btn text-white coustem-bg mt-3" name="submit">SEND</button>
                    </form>
                </div>
            </div>
           
        </div>
    </div>

     <!--------------- footer -------------------->
    <?php require('include/footer.php')?>

   
</body>
</html>