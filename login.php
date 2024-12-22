<?php
    session_start();
    $con= mysqli_connect('localhost','root','','hotel');

    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);  

    $q1  = "select email,password from registration where email='$email' and password='$password'";
    $r1 = $con->query($q1);

    $noor = $r1->num_rows;

    if($noor == 1)
    {
        $_SESSION['userlogin'] = $email;
        $_SESSION['user_id'] = true;
        $stmt=$con->prepare("insert into login(email,password)values(?,?)");
        $stmt->bind_param("ss",$email,$password);
        $stmt->execute();
        // header("location:index.php");
        echo"<script>alert('Login successfully')</script>";
        echo "<script>window.location.href = 'index.php';</script>";
    }
    else
    {
        echo"<script>alert('invalid email and pass')</script>";
        $_SESSION['userlogin'] != $email;
        // header("location:rooms.php");
        echo "<script>window.location.href = 'index.php';</script>";
    }
?>