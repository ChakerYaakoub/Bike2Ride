<?php
session_start();
// session_destroy();
// include("header.php"); 

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- favicon -->
    <link rel="icon" type="image/x-icon" href="photo/favi.png">
    <!--8ayaret-->

    <!-- 8ayaret -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">



    <!-- font cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- css link-->
    <link rel="stylesheet" href="css/default.css">

    <link rel="stylesheet" href="css/defaulthadi.css">

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

    <!-- Slick -->
    <link type="text/css" rel="stylesheet" href="css/slick.css" />
    <link type="text/css" rel="stylesheet" href="css/slick-theme.css" />

    <!-- nouislider -->
    <link type="text/css" rel="stylesheet" href="css/nouislider.min.css" />

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="css/style.css" />

    <!-- ny links add-->
    <!-- <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet"> -->
    <!-- this one thar fixwd my [roblem]-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <title>brand</title>

</head>

<body>
<?php 
session_start();
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- favicon -->
    <link rel="icon" type="image/x-icon" href="photo/favi.png">
    <!--8ayaret-->

    <!-- 8ayaret -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">



    <!-- font cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- css link-->
    <link rel="stylesheet" href="css/default.css">



    <title>default page Bike</title>
</head>

<body>

    <!-- test-->
    <div class="flex-nav">
        <div>
            <p>
                WE SELL THE BEST BICYCLES OUT!
            </p>
        </div>

        <div id="hov">
            <p> <a href="https://goo.gl/maps/So581tMAxw2yEuJA7" target="_blank" id="loc"><img src="photo/loc.webp"
                        alt="" width="16px" height="16px" style="float: left;">11559 Ventura
                    Boulevard, City, CA 9160 </p></a>
        </div>

    </div>

    <!-- test-->
    <!-- header start-->
    <header class="header">

        <div class="header-1">

            <a href="home.php" class="logo"><i class="fa-solid fa-bicycle" style="color:rgb(46, 25, 46);"></i>
                Bike<span style="color: rgb(179, 10, 10) ; font-weight: bold; font-size: larger; ">2</span>Ride</a>

            <form action="search.php" method="get" class="search-form" id="search">
                <input type="search" name="" placeholder="search here..." id="search-box">
                <button type="submit" class="fix noOut" style="background: 0;  border: none !important; ">
                    <!--class="fix noOut" -->
                    <label for="search-box" class="fas fa-search noOut"></label>
                </button>


            </form>


            <div class="icons">
                <div id="search-btn" class="fas fa-search"> </div>
                <a href="fav.php" class="fa fa-heart"></a>
                <a href="cart.php" class="fa fa-shopping-cart"></a>

                <a href="user.php">
                    <div id="login-btn" class="fas fa-user"></div>
                </a>

            </div>

        </div>

        <!-- end of header 1 -->
        <!-- start of header 2 -->

        <div class="header-2">
            <!--  <img src="photo/logo.png" alt="" >  -->
            <!--  <img src="photo/logo.png" alt="" style="position: relative; width: 10rem; left: 16rem; bottom: 0rem;" >  -->
            <nav class="navbare">

                <a href="home.php"> Home</a>              
                <a href="bikes.php"> Bikes</a>
                <a href="accessories.php"> Accessories</a>
                <a href="brand.php"> Brand</a>
                <a href="about.html"> About</a>


            </nav>


        </div>
        <!-- end of header 2 -->

    </header>



    <!--header end -->

    <!--bottom nav bare-->

    <nav class="bottom-navbare">



        <a href="home.php"> Home</a>
        <a href="bikes.php"> Bikes</a>
        <a href="accessories.php">  Accessories </a>
        <a href="brand.php"> Brand</a>
        <a href="about.html"> About</a>




    </nav>

    </header>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- favicon -->
    <link rel="icon" type="image/x-icon" href="photo/favi.png">
    <!--8ayaret-->

    <!-- 8ayaret -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">



    <!-- font cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- css link-->
    <link rel="stylesheet" href="css/default.css">



    <title>default page Bike</title>
</head>

<body>

    <!-- test-->
    <div class="flex-nav">
        <div>
            <p>
                WE SELL THE BEST BICYCLES OUT!
            </p>
        </div>

        <div id="hov">
            <p> <a href="https://goo.gl/maps/So581tMAxw2yEuJA7" target="_blank" id="loc"><img src="photo/loc.webp"
                        alt="" width="16px" height="16px" style="float: left;">11559 Ventura
                    Boulevard, City, CA 9160 </p></a>
        </div>

    </div>

    <!-- test-->
    <!-- header start-->
    <header class="header">

        <div class="header-1">

            <a href="home.php" class="logo"><i class="fa-solid fa-bicycle" style="color:rgb(46, 25, 46);"></i>
                Bike<span style="color: rgb(179, 10, 10) ; font-weight: bold; font-size: larger; ">2</span>Ride</a>

            <form action="search.php" method="get" class="search-form" id="search">
                <input type="search" name="" placeholder="search here..." id="search-box">
                <button type="submit" class="fix noOut" style="background: 0;  border: none !important; ">
                    <!--class="fix noOut" -->
                    <label for="search-box" class="fas fa-search noOut"></label>
                </button>


            </form>


            <div class="icons">
                <div id="search-btn" class="fas fa-search"> </div>
                <a href="fav.php" class="fa fa-heart"></a>
                <a href="cart.php" class="fa fa-shopping-cart"></a>

                <a href="user.php">
                    <div id="login-btn" class="fas fa-user"></div>
                </a>

            </div>

        </div>

        <!-- end of header 1 -->
        <!-- start of header 2 -->

        <div class="header-2">
            <!--  <img src="photo/logo.png" alt="" >  -->
            <!--  <img src="photo/logo.png" alt="" style="position: relative; width: 10rem; left: 16rem; bottom: 0rem;" >  -->
            <nav class="navbare">

                <a href="home.php"> Home</a>              
                <a href="bikes.php"> Bikes</a>
                <a href="accessories.php"> Accessories</a>
                <a href="brand.php"> Brand</a>
                <a href="about.html"> About</a>


            </nav>


        </div>
        <!-- end of header 2 -->

    </header>



    <!--header end -->

    <!--bottom nav bare-->

    <nav class="bottom-navbare">



        <a href="home.php"> Home</a>
        <a href="bikes.php"> Bikes</a>
        <a href="accessories.php">  Accessories </a>
        <a href="brand.php"> Brand</a>
        <a href="about.html"> About</a>




    </nav>

    </header>

    





    <!-- just delete this div and start  -->

    <div class="container">
        <div class="row">

            

            <div class="col-md-12">
                <div class="section-title">
                    <h3 class="title">We delivered our top 8 brands</h3>
        
                </div>
            </div>

            
            <!--   haida l ID le 3am 3ayetla fee-->
            <div id="dataDone"></div>
            <!-- ------------------------------------- -->


           

        </div>









    </div>

















    <!-- end here  Page content-->

    <!-- Don't touch anything below !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->


    <!-- start footer  -->
    <br><br> <br>

    <hr id="foot">


    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3 class="fotImage"> <i class="fa-solid fa-bicycle" style="color:rgb(46, 25, 46);"></i>
                    Bike<span style="color: rgb(179, 10, 10) ; font-weight: bold; font-size: larger; ">2</span>Ride
                </h3>
                <p class="sm" style="font-size: 1.3rem;">With bicycling being probably the most popualr sports among
                    non-professionals, millions of lebanese
                    need to buy a decent bike at a good price. We help them arrange just that!</p>
                <p class="sm">
                    <a href="https://www.facebook.com/bikelebanon/" target="_blank"><i
                            class="fa-brands fa-square-facebook"></i></a>
                    <a href="https://twitter.com/beirutbybike" target="_blank"> <i
                            class="fa-brands fa-square-twitter"></i></a>
                    <a href="https://www.instagram.com/beirutbybike/" target="_blank"> <i
                            class="fa-brands fa-square-instagram"></i></a>


                </p>

            </div>





            <div class="box">
                <h3 class="fotImage">
                    Help <span style="color: rgb(179, 10, 10) ; font-weight: bold; font-size: larger; "> &</span>
                    Service

                </h3>
                <a href="guarantee.html" class="sm">Price Guarantee</a>
                <a href="delivery.html" class="sm">Delivery And Product</a>

            </div>

            <div class="box">
                <h3 class="fotImage">
                    Contac<span style="color: rgb(179, 10, 10) ; font-weight: bold; font-size:larger; ">t</span> Us

                </h3>

                <a href="mailto://bike2ride@hotmail.org" class="sm">Mail: bik2rid@hotmail.org</a>
                <a href="https://goo.gl/maps/So581tMAxw2yEuJA7" class="sm" target="_blank">11559 Vent Boulerd
                    t604</a>
                <a href="tel:+961 71180632" class="sm">Phone: 555-748-6052</a>
                <!-- logo -->
                <a href="https://wa.me/096171180632" target="_blank"><i class="fa-brands fa-square-whatsapp"></i></a>
                <a href="mailto://bike2ride@hotmail.org"> <i class="fa-solid fa-square-envelope"></i></a>


            </div>



            <div class="box">


                <h3 class="fotImage">
                    Secure <span
                        style="color: rgb(179, 10, 10) ; font-weight: bold; font-size: larger; ">p</span>ayments

                </h3>
                <a href="https://mingclee.medium.com/paypal-vs-credit-card-visa-master-961c6f13c604" target="_blank">
                    <img src="photo/pay.jpg" alt="" class="pay">
                </a>

                <br> <br>

                <h5 class="sm">
                    Since 2010 BIKE<span style="color: rgb(179, 10, 10) ; font-weight: bold;  ">2</span>RIDE <br>
                    specialist in selling bikes

                </h5>








            </div>

        </div>

        <div class="credit"> © Bike2Ride 2022 Credite By Yaakoub Chaker -Ranking Referencing Offers - Help and contact -
            Site map -
            Credits and legal notices - Personal data - Cookies policy </div>



    </section>
    <!-- end footer  -->

    <script src="javascript/default.js"></script>
    <script src="js/brandscript.js"></script>

</body>

</html>