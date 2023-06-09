<!DOCTYPE html>

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

    <link rel="stylesheet" href="css/home.css">
    <!--for home page -->
    <link rel="stylesheet" href="css/homepagemedia.css">
    <!--for home page -->



    <title>Home Page BIKE2RIDE</title>
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
                <input type="search" name="word" placeholder="search here..." id="search-box">
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



    <!-- Don't touch anything above!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->



    <!-- start from here  Page content  -->


    <!-- If the the fisrt centent  is a large picture that touche the navbar , do not put a <br/> -->


    <!-- And if the first content is not an image, you must put a <br/>  example:  text or title -->
















  <!-- start from here  Page content  -->


    <!-- If the the fisrt centent  is a large picture that touche the navbar , do not put a <br/> -->


    <!-- And if the first content is not an image, you must put a <br/>  example:  text or title -->

















    <!-- just delete this div and start  -->

    <div class="principal">

        <!-- start div 1 img and how to choze a bike  -->

        <div class="div1">

            <img src="photo/bg.jpg" alt="how to chose a bike ">

            <div class="topleft">HOW TO <span style="color: rgb(179, 10, 10) ;  ">CHOOSE</span> A BIKE?
            </div>




            <div class="topleft1"> <a href="choose.html"> READ HERE </a> </div>

            <div class="topleft2"> With more than 2530 bicycle models in stock. <br>
                we are the best in our field of expertise! </div>

            <div class="botleft">WE PROVIDE </div>
            <div class="botleft1">AN UNMATCHED LEVEL <br> OF<span style="color: rgb(179, 10, 10) ;  ">QUALITY</span> AND
                SERVICE
            </div>




        </div>

        <!-- end div 1 img and how to choze a bike  -->

        <br>
        <div class="div2">
            <p>
                In our store you will find the best <span class="red"> Bikes</span> at the best <span class="red">
                    Prices</span>

            </p>
        </div>

        <br>

        <!-- end of div 2  -->

    </div>





    <!-- start off scrooll carpousser -->






    <div class="divhome">


        <div class="hom1">


            <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>

                </div>

                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>

                </ol>
                <div class="carousel-inner">








                    <div class="carousel-item active" data-bs-interval="3000">

                        <div class="it1">




                            <img src="photo/bg5.jpg" alt="buy a bike ">
                            <div class="p1"> LOTS OF <span class="red">BIKES</span> <span class="light">FOR SALE…</span>
                            </div>

                            <div class="p2">
                                Just for you to understand just how huge our fleet of bike models <br> is, take a look
                                here,
                                which
                                includes 1140 of our available models!
                                <br>
                                <br>

                                Among other types, we have the following types available: <br> Cyclocross bicycles;
                                touring
                                tricycles/time trial bikes; Flat road <br>
                                bikes. Track bikes/fixed gears...
                            </div> <br>

                            <div class="p3"> <a href="bikes.php">BUY NOW </a> </div>



                        </div>

                    </div>

















                    <div class="carousel-item" data-bs-interval="3000">

                        <div class="it2">


                            <img src="photo/bg6.jpg" alt="accessories ">
                            <div class="p1"> AMAZING <span class="red"> BIKE ACCESSORIES </span> <span class="light">
                                    <span class="br"> <br></span> . . FOR
                                    YOUR BIGGEST
                                    PASSION</span>
                            </div>


                            <div class="p2">
                                Wind in your face, sun on your skin, yellow rape fields, scented woodland all <br> when
                                youre
                                out on your bike.
                                But if you want to enjoy your ride to the full.
                                <br>

                                <br>

                                Safety, increased performance, comfort just a few of the things that bike accessories
                                <br>
                                have
                                <br>a big impact
                                on.
                                You ll find everything you need for everyday or professional <br> cycling in the BIKE24
                                online shop: enjoy
                                browsing
                                and find the must-have bike gadgets .

                            </div> <br>

                            <div class="p3"> <a href="accessories.php">SHOW NOW</a> </div>

                        </div>


                    </div>



                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                    data-bs-slide="prev">
                    <span class="prev123" aria-hidden="true"><i class="fa-solid fa-circle-chevron-left"></i></span>

                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                    data-bs-slide="next">
                    <span class="next123" aria-hidden="true"> <i class="fa-solid fa-circle-chevron-right"></i></span>



                </button>
            </div>
        </div>



        <!-- 
        <div class="hom2">
    
          <img src="photo/bg7.jpg" alt=""> <br>
          <img src="photo/bg8.jpeg" alt=""> 
        
    
        </div> -->

    </div>



    <!-- end off scrool !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
    <?php
    require('config.php');
    $sql = "SELECT * FROM `product` order by product_id DESC LIMIT 4;";
    $result = mysqli_query($con, $sql);
 
    require('resultNO.php');



    
    ?>




        <hr>   
    <p class="titleT">NEWS <span class="red">&</span> HIGHLIGHTS :</p>

    <div class="contNew">



    <?php
        for ($i = 0; $i < mysqli_num_rows($result); $i++) {
            $row = mysqli_fetch_assoc($result);
            $product_id = $row['product_id'];
            $price = $row['price'];
            $discount = $row['discount'];

            $priceAfter = ($price - ($price * $discount / 100));

        echo "
        <div>

        <a href='echoproduct.php?product_id=$product_id'>
                <p class='p1'> ".$row['brandName']."</p>
                <p class='p2'>".$row['title']."</p>
                <p class='p3'><img src='productsImages/$product_id.".$row['ext']."' alt='product'></p>
                <p class='p4'>


                    <span class='s0'> <sup>RRP1</sup> </span> <span style='text-decoration:line-through;' class='s1'>
                        ".$row['price']." € </span> <span class='s2'> ".$priceAfter." € </span>
                </p>
            </a>
        </div>
        
        ";


    
    
        }
    
    ?>

        <!-- <div>

            <a href="echobike2.html">
                <p class="p1"> Wilier</p>
                <p class="p2"> Wilier GARDA Disc - Ultegra - NDR38 - Carbon Roadbike - 2023 - black red matt </p>
                <p class="p3"><img src="photo/bik.jpg" alt="product"></p>
                <p class="p4">

                    <span class="s22"> 219,99 € </span>
                </p>
            </a>
        </div> -->
        <!-- <div>

            <a href="echoHelmets.html">
                <p class="p1"> KASK</p>
                <p class="p2">KASK Sintesi Bike Helmet - White
                </p>
                <p class="p3"><img src="photo/nn.jpg" alt="product"></p>
                <p class="p4">

                    <span class="s22"> 21,99 € </span>
                </p>
            </a>
        </div> -->
        <!-- <div>

            <a href="echoGloves.html">
                <p class="p1"> BBB</p>
                <p class="p2">BBB Cycling Coldshield Reflective Winter Gloves BWG-38 - Black </p>
                <p class="p3"><img src="photo/gg.jpg" alt="product"></p>
                <p class="p4">


                    <span class="s0"> <sup>RRP1</sup> </span> <span style="text-decoration:line-through;" class="s1">
                        23,00 € </span> <span class="s2"> 19,99 € </span>
                </p>
            </a>
        </div> -->
        <!-- <div>

            <a href="echobootles.html">
                <p class="p1">Elite</p>
                <p class="p2">Elite Deboyo Thermo Bottle 550ml - silver </p>
                <p class="p3"><img src="photo/bo.jpg" alt="product"></p>
                <p class="p4">

                    <span class="s22"> 17,99 € </span>
                </p>
            </a>
        </div> -->



    </div>
    <!-- //////////////////////////final 1 ////////////////////////////////  -->

    <!-- <div class="final">
        <div> <img src="photo/bg3.jpg" alt=""> </div>


        <div>
            <p class="titleT1">The importance <span class="red">of</span> using a bike</p>
            <p class="ss23"> Without gender discrimination, experts recommend devoting 30 minutes a day to road cycling
                (or indoor
                stationary bikes, or similar in the gym), as a minimum to stay in shape and reap the undeniable
                life-improving benefits.</p>

        </div>

        <div> <img src="photo/bg4.jpg" alt="">

        </div>
    </div> -->



     <hr> <br> <br> 
  
    <!-- ?/////////////////////////////////////////////// -->

    <div class="final2">
        <div>
           <a href=""> <img src="photo/gloves.jpg" alt="" >   </a> 
        </div>
        <div>
           <a href=""><img src="photo/hits.jpg" alt=""> </a>  
        </div>
       
        <div>
          <a href=""> <img src="photo/butt.jpg" alt=""></a>  
        </div>
        <div>
          <a href=""> <img src="photo/acccc.jpg" alt=""></a>  
        </div>
        

    </div>

       <!-- ????????????????????????????????????????????????????????????????????????  -->
    <br>  <br>  <hr>   

 
     

    <div class="final">
        <p class="titleT1"> <img src="photo/hh.jpg" alt="" > The importance <span class="red">of</span> using a bike : 
        
            <span class="ss23"> Without gender discrimination, experts recommend devoting 30 minutes a day to road cycling
                (or indoor
                stationary bikes, or similar in the gym), as a minimum to stay in shape and reap the undeniable
                life-improving benefits. </span> 
           
    
        </p>
       

    </div>   <hr> 
    <!-- ////////////////////////////// -->

    <br>
    <p class="titleT">OUR <span class="red">P</span>ARTNERS:</p> <br>

    <div class="final22">
        <div>
           <a href="partners.html"><img src="photo/par1.png" alt=""></a> 
        </div>
        <div>
          <a href="partners.html"> <img src="photo/p2.jpg" alt=""></a> 
        </div>
        <div>
          <a href="partners.html"><img src="photo/par3.png" alt=""></a>  
        </div>
        <div>
          <a href="partners.html"><img src="photo/par4.png" alt="" ></a>  
        </div>

    </div> <br><br>


















    <!-- end here  Page content-->

















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
                <a href="tel:+961 71180632" class="sm">Phone: 555-748-6052</a> <br>
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
    <script src="javascript/home.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>

</body>

</html>