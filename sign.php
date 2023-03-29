<?php
include_once('include/config.php');
if(isset($_POST['submit']))
{
$fname=$_POST['full_name'];
$email=$_POST['email'];
$number=$_POST['number'];
$password=md5($_POST['password']);
$query=mysqli_query($con,"insert into users(fullname,email,number,password) values('$fname','$email','$number','$password')");
if($query)
{
    echo "<script>alert('Successfully Registered. You can login now');</script>";
    header('location:login.php');
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
    <title>sign_up</title>
    <script type="text/javascript">
        function valid()
        {
            if(document.registration.password.value!document.registration.password_again.value)
            {
                alert("Password and Confirm Password Field do not match  !!");
                document.registration.password_again.focus();
                return false;
            }
            return true;
        }
    </script>
</head>
<body>
    <!--Header-->
    <header class="container ">
        <section class="d-flex justify-content-between mt-4 py-4">
            <section class="d-flex justify-content-start">
                 <a href="home.html">
                    <img src="images/WhiteLogo.png" width="180px" height="50px" alt="WhoGoLearn Logo"> 
                </a>         
            </section> 
        </section>
    </header>
    <!--Hero section-->
    <div class="container pt-3">
        <div class="d-flex justify-content-between">
            <section class="pe-4">
                <h5 class="fs-1 mb-3">Sign up Details</h5>
                <form action="" name="registration" id="registration"  method="post" onSubmit="return valid();">
                    <input type="text" class="w-100 py-2 mt-2" name="full_name" placeholder="Enter Full Name" required/><br>
                    <br>
                    <input type="email"  class="w-100 py-2 mt-2" name="email" onBlur="userAvailability()" placeholder="Enter Email" required/><br>
                    <br>
                    <input type="number"  class="w-100 py-2 mt-2" name="number" placeholder="Enter Phone Number" required/><br>
                    <br>
                    <input type="password"  class="w-100 py-2 mt-2" name="password" placeholder="Enter Password" required/><br>
                    <br>
                    <input type="password"  class="w-100 py-2 mt-2 mb-0" name="password_again" placeholder="Confirm Password" required/><br>
                    <span class="d-flex align-content-center">
                        <input type="checkbox" class="mt-3" placeholder="Enter Full Name" required/> 
                        <p class="ps-2 pt-4 fs-6 mt-1"> 
                            By signing up, you agree to
                             <a href="" class="text-primary text-decoration-none ">Terms of Service</a>  
                             and <a href="" class="text-primary text-decoration-none">Privacy Policy</a>  </p>
                    </span>
                    <button id="login-btn" class="w-100 bg-danger py-2 text-white fs-5 border-0 rounded" type="submit" name="submit">Register</button>
                </form>
                <p class="mt-4">Already registered?<a href="login.php" class="text-decoration-none ps-2">Login</a> </p>
            </section>
            <section>
                 <h1 class="fw-bold">Welcome to  WhoGoLearn</h1>
                    <!-- <img src="./images/" -->
                    <img src="./images/Mobile login-bro 1 (1).png" width="611px" height="600px"/> 
                 <!-- <iframe src="https://giphy.com/embed/b1heMtIyHMQwY8mFJ4" width="480px" height="310" frameBorder="0" class="giphy-embed ps-2" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/Spaceshipboi-me-pepper-sauce-you-too-much-b1heMtIyHMQwY8mFJ4"></a></p> -->
            </section>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
    function userAvailability() {
        $("#loaderIcon").show();
        jQuery.ajax({
            url: "check_availability.php",
            data:'email='+$("#email").val(),
            type: "POST",
            success:function(data){
                $("#user-availability-status1").html(data);
                $("#loaderIcon").hide();
            },
            error:function (){}
        });}
    </script>
    <script src="./script/myscript.js"></script>
</body>
</html>