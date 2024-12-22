<?php
    // session_start()
    $con = mysqli_connect("localhost","root","","hotel");
    if(isset($_POST['submit']))
    { 
        $username = trim($_POST["username"]);
        $email = trim($_POST["email"]);
        $pno = trim($_POST["pno"]);
        $pic = trim($_POST["pic"]);
        $address = trim($_POST["address"]);
        $pincode = trim($_POST["pincode"]);
        $dob = trim($_POST["dob"]);
        $password = trim($_POST["password"]);
        $cpassword = trim($_POST["cpassword"]);

        if($password == $cpassword)
        {
            if($con->connect_error)
            {
                 die('connection Failed :  '.$con->connect_error);
                 header("Location: index.php");
            }
            else
            {
                $stmt=$con->prepare("insert into registration (username,email,pno,pic,address,pincode,dob,password)values(?,?,?,?,?,?,?,?)");
                $stmt->bind_param("ssssssss",$username,$email,$pno,$pic,$address,$pincode,$dob,$password);
                $stmt->execute();
                echo"registration scuessfully";
                $stmt->close();
                $con->close();
                header("Location: index.php");
            }
        }
        else{
            echo "Password does not match";
        }
    }

?>
