<?php
session_start();
error_reporting(0);
include("include/config.php");
if(isset($_POST['submit']))
{
$puname=$_POST['email'];    
$ppwd=md5($_POST['password']);
$ret=mysqli_query($con,"SELECT * FROM users WHERE email='$puname' and password='$ppwd'");
$num=mysqli_fetch_array($ret);
if($num>0)
{
$_SESSION['login']=$_POST['email'];
$_SESSION['id']=$num['id'];
$pid=$num['id'];
$host=$_SERVER['HTTP_HOST'];
$uip=$_SERVER['REMOTE_ADDR'];
$status=1;
// For stroing log if user login successfull
$log=mysqli_query($con,"insert into userlog(uid,username,userip,status) values('$pid','$puname','$uip','$status')");
header("location:dashboard.php");
}
else
{
// For stroing log if user login unsuccessfull
$_SESSION['login']=$_POST['email']; 
$uip=$_SERVER['REMOTE_ADDR'];
$status=0;
mysqli_query($con,"insert into userlog(username,userip,status) values('$puname','$uip','$status')");
$_SESSION['errmsg']="Invalid username or password";

header("location:login.php");
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
    <title>login</title>
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
                <h5 class="fs-2 mb-3">Welcome back. Please login to account</h5>
                <span style="color:red;"><?php echo $_SESSION['errmsg']; ?><?php echo $_SESSION['errmsg']="";?></span>
                <form method="post">
                <div action="">
                    <input type="email" name="email" id="email" class="w-100 py-2 mt-5" placeholder="Enter Email" required/><br>
                    <input type="password" name="password" id="password" class="w-100 py-2 mt-5 mb-2" placeholder="Enter Password" required/><br>
                    <span class="d-flex justify-content-between mt-3">
                        <span class="d-flex align-content-center">
                            <input type="checkbox" class="mt-0"> 
                            <p class="ps-2 pt-3"> Remember Me. </p>
                        </span>
                        <a href="forgot-password.php" class="text-primary text-decoration-none pt-3">Forgot password?</a>   
                    </span>
                    <button class="w-100 bg-danger text-white fs-5 border-0 rounded mt-3 ps-2 py-2"  type="submit" name="submit">login</button>
                </div>
            </form>
                <p class="mt-4">Don't have an account? <a href="sign.php" class="text-decoration-none">Register</a> </p>
            </section>
            <section>
                 <h1 class="fw-bold">Welcome to  WhoGoLearn</h1>
                 <!-- <img src="./images/" -->
                 <img src="./images/pana.png" width="500px" height="500px">
            </section>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="./script/myscript.js"></script>
</body>
</html>