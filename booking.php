<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel -Booking</title>
    
  <?php require('include/links.php')?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    
</head>
<body class="bg-light">
    <!---------------- header ---------------> 
        <?php require('include/header.php') ?>

     <div class="my-5 px-4">
        <h2 Class=" fw-bold h-font text-center">BOOKING</h2>
        <div class="h-line bg-dark"></div>
    </div>

    <div class="container">
        <div class="row">
            
        <!------------------left side -------------------->
            <div class="col-lg-6 col-md-6 px-4 ">
                <img src="images/rooms/7.png" class="img-fluid rounded" style="width: 600px; height:450px;">
            </div>


        <!------------------right side -------------------->
            <div class="col-lg-6 col-md-6 px-4">
                <div class="bg-white rounded shadow p-4 border">
                    <form action="book_room.php" method="post">
                        <h5>Book Room </h5>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="mt-3">
                                    <label class="form-label" style="font-weight:500;"> Your Name</label>
                                    <input type="text" class="form-control" name="name" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mt-3">
                                    <label class="form-label" style="font-weight:500;"> Your email</label>
                                    <input type="email" class="form-control" name="email">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mt-3"  >
                                    <label class="form-label" style="font-weight:500;"> Check In</label>
                                    <input type="date" class="form-control datetimepicker-input" name="checkin" placeholder="Check In" id="check-in">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mt-3">
                                    <label class="form-label" style="font-weight:500;"> Check Out</label>
                                    <input type="date" class="form-control datetimepicker-input" name="checkout" placeholder="Check Out" id="check-out">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mt-3">
                                    <label class="form-label" style="font-weight:500;"> Select Adult</label>
                                    <select class="form-select" name="adult">
                                        <option value="1">Adult 1</option>
                                        <option value="2">Adult 2</option>
                                        <option value="3">Adult 3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mt-3">
                                    <label class="form-label" style="font-weight:500;">Select Child</label>
                                    <select class="form-select" name="child">
                                        <option value="1">Child 1</option>
                                        <option value="2">Child 2</option>
                                        <option value="3">Child 3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-50 py-3" type="submit" name="submit">Book Now</button>
                                <!--<button type="submit" class="btn text-white coustem-bg mt-3">Book Now</button> -->
                            </div>
                        </div>       
                    </form>
                </div>
            </div>
        </div>
    </div>

   

     <!--------------- footer -------------------->
    <?php require('include/footer.php')?>

 <script>
document.addEventListener('DOMContentLoaded', function() {
  const checkInDatePicker = document.getElementById('check-in');
  const checkOutDatePicker = document.getElementById('check-out');
  const today = new Date().toISOString().split('T')[0]; // Get the current date in YYYY-MM-DD format

  // Set the minimum date for both check-in and check-out inputs to today
  checkInDatePicker.min = today;
  checkOutDatePicker.min = today;

  checkInDatePicker.addEventListener('change', function() {
    const checkInDate = new Date(checkInDatePicker.value);
    const checkOutDate = new Date(checkOutDatePicker.value);


    // Set the minimum "check-out" date to the selected "check-in" date
    checkOutDatePicker.min = checkInDate.toISOString().split('T')[0];

    // Reset the "check-out" date when the "check-in" date is greater than the selected "check-out" date
    if (checkOutDate < checkInDate) {
      checkOutDatePicker.value = '';
    }
  });

});
</script>


</body>
</html>

