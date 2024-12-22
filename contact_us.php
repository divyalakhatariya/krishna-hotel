<?php
    session_start();

    $con = mysqli_connect("localhost","root","","hotel");
    
    if(isset($_POST['submit']))
    { 
        $name = trim($_POST["name"]);
        $email = trim($_POST["email"]);
        $subject = trim($_POST["subject"]);
        $message = trim($_POST["message"]);
        
            if($con->connect_error)
            {
                 die('connection Failed :  '.$con->connect_error);
                 header("Location: index.php");
            }
            else
            {
                $stmt=$con->prepare("insert into contact_us (name,email,subject,message)values(?,?,?,?)");
                $stmt->bind_param("ssss",$name,$email,$subject,$message);
                $stmt->execute();
                echo "insert successfully";
                $stmt->close();
                $con->close();
                // header("Location: index.php");
                echo"<script>alert('Thanks for contact')</script>";
                echo "<script>window.location.href = 'index.php';</script>";
            }
    }
?>