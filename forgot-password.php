<?php
session_start();
error_reporting(0);
include("include/config.php");
//Checking Details for reset password
if(isset($_POST['submit'])){
$name=$_POST['fullname'];
$email=$_POST['email'];
$query=mysqli_query($con,"select id from  users where fullName='$name' and email='$email'");
$row=mysqli_num_rows($query);
if($row>0){

$_SESSION['name']=$name;
$_SESSION['email']=$email;
header('location:reset-password.php');
} else {
echo "<script>alert('Invalid details. Please try with valid details');</script>";
echo "<script>window.location.href ='forgot-password.php'</script>";


}

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Reset Password</title>
</head>
<body>
    <!--Header-->
    <header class="container ">
        <section class="d-flex justify-content-between mt-4 py-4">
            <section class="d-flex justify-content-start">
                 <a href="index.html">
                    <img src="images/WhiteLogo.png" width="180px" height="50px" alt="WhoGoLearn Logo"> 
                </a>         
            </section> 
        </section>
    </header>
    <!--Hero section-->
    <div id="loading">
    </div>
    <div class="container pt-3">
        <div class="d-flex justify-content-between">
            <section class="pe-4">
                <h5 class="fs-2 mb-3">Please enter your Email to recover your password.</h5>
                <span style="color:red;"><?php echo $_SESSION['errmsg']; ?><?php echo $_SESSION['errmsg']="";?></span>
                <form method="post">
                <div action="">
                    <input type="text" name="fullname" id="email" class="w-100 py-2 mt-5" placeholder="Enter full name" required/><br>
                    <input type="email" name="email" id="email" class="w-100 py-2 mt-5" placeholder="Enter Email" required/><br>
                    <button class="w-100 bg-danger text-white fs-5 border-0 rounded mt-3 ps-2 py-2"  type="submit" name="submit">reset</button>
                </div>
            </form>
                <p class="mt-4">Remember Now? <a href="login.php" class="text-decoration-none">Login</a> </p>
            </section>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>