<?php
session_start();
error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();

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
    <title>Home_page</title>
</head>
<body>
    <!--Header Section-->
    <header class="container contactNavbar">
        <section class="d-flex justify-content-between mt-5 py-4">
            <section class="d-flex justify-content-between">
                <a href="dashboard.php">
                    <img src="images/logo.png" width="130px" height="50px" alt="WhoGoLearn Logo">
                </a>         
                <section class="ms-5 d-flex justify-center align-center">
                    <span class="d-flex  justify-content-between align-self-center">
                        <img src="images/3603178.png" class="mt-4" width="20px" height="20px" alt="Dotted Box">
                        <a href="#" class="align-self-center btn-danger rounded ms-5 px-3 mt-2 py-2 text-white text-decoration-none">Premium</a>
                    </span>
                </section>
            </section>
            <section class="d-flex justify-content-between align-content-center">
                <p class="align-self-center pe-2 text-decoration-none text-dark " style="padding-top: 18px;">Welcome<span style="color: #0D6EFD;">
                    <?php
                    $query=mysqli_query($con,"select fullName from users where id='".$_SESSION['id']."'");
                    while($row=mysqli_fetch_array($query))
                        {
                            echo $row['fullName'];
                        }
                    ?>
                </span></p>
                <img src="images/male avatar.jpg" class="ms-2" width="48px" height="49px" alt="Dotted Box">
            </section>
        </section>
    </header>
    <!--Hero-->
            <main class="pt-5 courses-bg-img">
                <div class="container">
                    <div class="pt-5" >
                        <p class="fs-5 pt-5 text-white">Courses</p>
                        <h1 class="fw-bold text-white pt-4">Join the Millions for<br> better learning.</h1>
                    </div>
                </div>
            </main>
            <!--course section-->
            <!-- <div class="container">
                <div class="d-flex justify-content-between pt-5">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/TSiL69qRBt4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div> -->
            <!-- video content first row-->
            <div class="container">
                <div class="mt-3 d-flex justify-content-between "> 
                    <div class="pt-3">
                        <span class="">Graphics Design</span>
                            <iframe width="460px" height="315px" src="https://www.youtube.com/embed/lp8PxXsMuJg?controls=0"
                            frameborder="0" allow="accelerometer; autoplay; clipboard-write;
                            encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>    
                    </div>
                    <div class="ps-3 pt-3">
                        <span >Affliate Marketing</span>
                        <iframe width="420px" height="315px" 
                            src="https://www.youtube.com/embed/IYgHfakjJDY?controls=0"  
                            title="YouTube video player" frameborder="0" 
                            allow="accelerometer; autoplay; clipboard-write; 
                            encrypted-media; gyroscope; picture-in-picture" 
                            allowfullscreen></iframe>
                    </div>
                    <div class="ps-3 pt-3 mb-5">
                        <span >Digital Marketing</span>
                            <iframe width="420px" height="318" src="https://www.youtube.com/embed/NG93vyPo29A?controls=0"
                            title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; 
                            clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div> 
                </div>
            </div>
            <!--video second row-->
            <div class="container">
                        <div class=" mb-3 d-flex justify-content-between mt-5"> 
                            <div class="d-flex pt-3 flex-column">
                                <span class="">SEO</span>
                                <iframe width="430px" height="318px" src="https://www.youtube.com/embed/wjfPNkFLR3I?controls=0"
                                title="YouTube video player" frameborder="0" 
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope;
                                picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <div class="d-flex ps-3 flex-column pt-3">
                                <span class="">Project Management</span>
                                <iframe width="440px" height="315" src="https://www.youtube.com/embed/NcOmJSrXYoQ?controls=0" 
                                title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; 
                                clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <div class="d-flex ps-3 flex-column pt-3">
                                <span class="">Education</span>
                                <iframe width="426px" height="315" src="https://www.youtube.com/embed/AjgD3CvWzS0" 
                                title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; 
                                clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
            </div> 
    <!--Footer-->
      <footer class="footer-section">
        <!--Footer-first-section-->
        <div class="container pt-5">
            <section class="d-flex justify-content-between align-content-center">
                <section class="d-flex pt-3">
                    <img src="./images/openBook.png" class="text-danger" width="89px">
                    <section class="ps-3 pt-3">
                        <p class="text-white fw-bold">keep up to date - Get e-mail updates</p>
                        <p class="text-white fw-lighter fs-6">Stay tuned for the latest company news.</p>
                    </section>
                </section>
                <section class="align-self-center">
                    <section class="d-flex justify-content-end">
                        <img src="./images/cart.png" class="rounded-1 btn-danger cart" style="width:30px;">
                    </section>
                    <form class="d-flex pt-2">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-danger" type="submit">Subscribe</button>
                      </form>
                </section>
            </section>

        </div>
        <!--Footer-second-section-->
         <section class="d-flex justify-content-around pt-5">
                <section>
                    <a href="dashboard.php">
                    <img src="./images/WhiteLogo.png" width="130px" height="50px" alt="WhoGoLearn Logo"/>
                    </a>
                    <p class="text-white d-flex pt-4">
                        WhoGoLearn strives towards the provision of first class training <br> services in the emerging knowledge
                        based economy in Human <br> capacity Development and ICT while deploying cost effective <br> and efficient methods, standard technologies
                        and highly motivated <br>  personnel in longlife partnership that will provide a win win for <br> our clientele and our firm.
                    </p>

                    <strong class="text-white">Copyright &copy Terraskills 2023</strong>
                </section>
                <section>
                    <h5 class="text-white">Support Zone</h5>
                    <div class="d-flex flex-column">
                        <a href="#" class="text-decoration-none pt-2"> Featured courses</a>
                        <a  class="text-decoration-none btn btn-danger" href="logout.php">LOG OUT</a>
                    </div>
                </section>
                <section>
                    <h5 class="text-white">Explore Services</h5>
                    <div class="d-flex flex-column pt-2">
                        <a href="#" class="text-decoration-none"> Free courses</a>  
                    </div>
                </section>
         </section>
    </footer> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>