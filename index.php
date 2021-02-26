<?php 
  session_start(); 
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;900&display=swap"
        rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.6.2/animate.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/footer.css">


</head>

<body>
    <nav class="navbar">
        <div class="content">
            <div class="logo">
                <a href="index.php">Jayamal Textiles</a>
            </div>
            <ul class="menu-list">
                <div class="icon cancel-btn">
                    <i class="fas fa-times"></i>
                </div>
                <li><a href="index.php">Home</a></li>
                <li><a href="index.php?logout='1'">Login</a></li>
                <li><a href="feedback.html">Feedback</a></li>
                <li><a href="sizeChart.html">Size Chart</a></li>
                <li><a href="uniforms.html">Uniform</a></li>
                <li><a href="AboutUs.html">About Us</a></li>
                <li><a href="contactUs.html">Contact Us</a></li>
                


            </ul>
            <div class="icon menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>
    <header>
        <!-- auto hcange banner -->
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!--Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <div class="banner" style="background-image: url(image/index/test1.png);"></div>
                    <div class="carousel-caption">
                        <h2 class="animated bounceInRight" style="animation-delay: 1s">Order your <span>Uniform</span>
                        </h2>
                        <h3 class="animated bounceInLeft" style="animation-delay: 2s">Jayamal Textiles</h3>
                        <p class="animated bounceInRight" style="animation-delay: 3s"><a href="#">Shop Now</a></p>
                    </div>
                </div>
                <div class="item">
                    <div class="banner" style="background-image: url(image/index/test2.png);"></div>
                    <div class="carousel-caption">
                        <h2 class="animated slideInDown" style="animation-delay: 1s">Shop <span>Now</span></h2>
                        <h3 class="animated fadeInUp" style="animation-delay: 2s">Jayamal Textiles</h3>
                        <p class="animated zoomIn" style="animation-delay: 3s"><a href="#">Shop Now</a></p>
                    </div>
                </div>
                <div class="item">
                    <div class="banner" style="background-image: url(image/index/test1.png);"></div>
                    <div class="carousel-caption">
                        <h2 class="animated zoomIn" style="animation-delay: 1s">Order <span>uniforms</span></h2>
                        <h3 class="animated fadeInLeft" style="animation-delay: 2s">Jayamal Textiles</h3>
                        <p class="animated zoomIn" style="animation-delay: 3s"><a href="#">Shop Now</a></p>
                    </div>
                </div>

            </div>

            <!-- Controls -->
            <!--
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        -->
        </div>

    </header>


    <!--customize order -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-8 col-s-12">
                <div class="banner2" style="background-image: url(image/index/customizecover.png);"></div>
            </div>
            <div class="col-xl-4 col-s-12">
                <div class="customize">
                    <button>CUSTOMIZE NOW</button>
                    <h2> You can customize
                        <br>your uniform
                        <br> now
                        <br> as of your wish
                        <br>
                        <br>
                    </h2>
                </div>
            </div>
        </div>
    </div>

    </div>
    <footer class="bg-light text-center text-lg-start">
        <!-- Copyright -->
        <div class="text-center p-3"style="background-color: #EDBB00;color: rgb(0, 0, 0);font-size: 30;font-weight: 500;">
            © 2020 Copyright:
            <a class="text-dark" style="background-color: #EDBB00;color: rgb(0, 0, 0);font-size: 30;font-weight: 500;" href="index.html">JayamaliText.com</a>
            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-linkedin"></a>
            <a href="#" class="fa fa-instagram"></a>
        </div>
        <!-- Copyright -->
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="js/index.js"></script>
    <script src="js/navbar.js"></script>

</body>

</html>