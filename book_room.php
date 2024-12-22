<?php
    //session_start();

    $con = mysqli_connect("localhost","root","","hotel");
    
    if(isset($_POST['submit']))
    { 
        $name = trim($_POST["name"]);
        $email = trim($_POST["email"]);
        $checkin = trim($_POST["checkin"]);
        $checkout = trim($_POST["checkout"]);
        $adult = trim($_POST["adult"]);
        $child = trim($_POST["child"]);

            if($con->connect_error)
            {
                 die('connection Failed :  '.$con->connect_error);
                 header("Location: index.php");
            }
            else
            {
                $stmt=$con->prepare("insert into booking (name,email,checkin,checkout,adult,child)values(?,?,?,?,?,?)");
                $stmt->bind_param("ssssii",$name,$email,$checkin,$checkout,$adult,$child);
                $stmt->execute();
                echo "insert successfully";
                $stmt->close();
                $con->close();
                // header("Location: index.php");
                echo"<script>alert('Booking successfully')</script>";
                echo "<script>window.location.href = 'index.php';</script>";
            }
    }
?>