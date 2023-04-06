<!DOCTYPE html>
<?php

session_start();
if(!isset($_SESSION['layer'])){
    
    header("location:user.php") ;
    die();
}
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

    <!-- ................for navs  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/Payments2.css">
    <link rel="stylesheet" href="css/PaymentsDefault.css">

    <script src="javascript/ajax/jquery-3.1.1.min.js" type="text/javascript"></script>
  <script src="javascript/ajax/ajaxCart.js" type="text/javascript"></script>




    <title>Payments | Bike2Ride</title>
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
        <a href="accessories.php"> Accessories </a>
        <a href="brand.php"> Brand</a>
        <a href="about.html"> About</a>




    </nav>

    </header>



    <!-- Don't touch anything above!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->



    <!-- start from here  Page content  -->


    <!-- If the the fisrt centent  is a large picture that touche the navbar , do not put a <br/> -->


    <!-- And if the first content is not an image, you must put a <br/>  example:  text or title -->

















    <!-- just delete this div and start  -->
    <br>



    <div class="container ">
        <b>
            <h4>
                <p>Your products are reserved for you</p>
            </h4>
        </b>

        <div class="row align-items-start Mylink">
            <div class="col notActive ">
                <a href="cart.php"> 1.My ORDERS  </a>

            </div>
            <div class="col notActive Myactive">
                <a href="Payments2.php">2.My Data</a>
            </div>
            <div class="col notActive">
                <a href="Payments3.php"> 3.PAYMENT</a>
            </div>
            <!-- <div class="col notActive ">
            4.PAYMENT CONFIRMATION
          </div> -->
        </div>



        <!-- ......srat the page content  -->


        <br>
        <div class="row continu">


            <!-- /////adress ggggggggggggggggggggggggggggggggggg -->
            <div class="col-sm-12 col-md-8 col-lg-8 box1">

                <form action="Payments3.php">

                <p class="title1">PERSONAL INFORMATION</p>
                <hr class="hr1">
                <p class="personalInformation">
                    <!--personal e,mail and teel -->


                    <!-- .. input mail  -->
                    <span class="spanininput">
                        <label class="inInput" for="maill">your email address*</label>


                        <input type="email" id="maill" name="email" class="originalInput" required
                            value="chakeryb@hotmail.com">

                    </span>


                    <!-- ... input tel  -->

                    <span class="spanininput" id="forleft">


                        <input type="tel" id="tell" name="tel" class="originalInput" required value="71836789">
                        <label class="inInput" for="tell">phone number e.g. 71123432* </label>

                    </span>

                </p>
                <br>
                <br>
                <p class="title1">INVOICE ADDRESS</p>
                <!--addresss delevery -->
                <hr class="hr1">

                <p class="personalInformation">

                    <!-- .. comany    -->

                <p> <span class="spanininput">
                        <label class="inInput" for="company"> Company</label>


                        <input type="text" id="Company" name="Company" class="originalInput" value=" ESA Coding Lab">

                    </span></p>


                <!-- .. input name  -->
                <span class="spanininput">
                    <label class="inInput" for="name"> First name*</label>


                    <input type="text" id="name" name="name" class="originalInput" required value="chaker">

                </span>


                <!-- ... input last name   -->

                <span class="spanininput" id="forleft">


                    <input type="text" id="lastname" name="lastname" class="originalInput" required value="yaakoub">
                    <label class="inInput" for="lastname">Last name* </label>

                </span>

                </p>



                <p class="personalInformation">




                    <!-- .. input street  -->
                    <span class="spanininput">
                        <label class="inInput" for="street"> Street*</label>


                        <input type="text" id="street" name="street" class="originalInput" required value=" 12 A12">

                    </span>


                    <!-- ... input adrees   -->

                    <span class="spanininput" id="forleft">


                        <input type="text" id="address" name="address" class="originalInput" required
                            value="Houla marjeoun">
                        <label class="inInput" for="address">Address addition* </label>

                    </span>

                </p>


                <p class="personalInformation">




                    <!-- .. input code postal   -->
                    <span class="spanininput">
                        <label class="inInput" for="postal"> Postal code*</label>


                        <input type="text" id="postal" name="street" class="originalInput" required value="000012">

                    </span>


                    <!-- ... input pays   -->

                    <span class="spanininput" id="forleft">


                        <select name="pays" id="pays" required class="originalInput">
                            <option value="France" selected>France</option>
                            <option value="Espagne">Espagne</option>
                            <option value="Estonie">Estonie</option>
                            <option value="Grèce">Grèce</option>
                            <option value="Danemark">Danemark</option>
                        </select>
                        <label class="inInput" for="pays">Country* </label>

                    </span>

                </p>
             

             

                  
                <br>
         







            </div>

            <!-- /////adress ggggggggggggggggggggggggggggggggggg -->




            <!-- price price price price price price price price price price price price price price  -->
            <div class="col-sm-12  col-md-12 col-lg-4 box2">
                <div>

                <p class="box2p1">DELIVERY TIME</p>
                    <br>
                    <p class="box2p2"> <span style="font-weight:bold ;"> BIKE<span style="color: rgb(179, 10, 10) ; font-weight: bold;  ">2</span>RIDE </span>generally only dispatches complete orders</p>
                    <p class="box2p3">  <i class="fa-regular fa-circle-check"></i> Ships immediately <br>
                        <i class="fa-regular fa-circle-check"></i>  Delivery time to <span id="addressU"> </span> 4-6 working days <br>
                       
                       <span id="free1"> </span> </p><br>

                        <p class="box2p1">ORDER SUMMARY</p>
                        <p class="box2p4">Total Product Value incl. VAT : <span style="padding-left: 7px;"> € </span><span id="TotalProductValue"></span> </p>

                        <p class="box2p4">Shipping cost :<span style="padding-left: 7px;"> € </span> <span id="Shipping">  </span></p>
                        <br>
                        <hr >
                        <br>
                        <p class="box2p4">Total amount incl. VAT :<span style="padding-left: 7px;"> € </span>  <span id="TotalAmount"> </span> </p>
                        <p class="box2p4">VAT included 20 % :<span style="padding-left: 7px;"> € </span> <span id="vat">   </span></p>
                        <br>
                        <p class="box2p5"> <i class="fa-solid fa-lock"></i> Data securely SSL encrypted</p>
                        <br><br> 
                        
                        <center>
                            <input type="submit" id="CONTINUE" value="CONTINUE" class="DefaultsubmitInput">

                        </center>


                    </form>



                </div>
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
                    <a href="tel:+961 71180632" class="sm">Phone: 555-748-6052</a> <br>
                    <!-- logo -->
                    <a href="https://wa.me/096171180632" target="_blank"><i
                            class="fa-brands fa-square-whatsapp"></i></a>
                    <a href="mailto://bike2ride@hotmail.org"> <i class="fa-solid fa-square-envelope"></i></a>


                </div>



                <div class="box">


                    <h3 class="fotImage">
                        Secure <span
                            style="color: rgb(179, 10, 10) ; font-weight: bold; font-size: larger; ">p</span>ayments

                    </h3>
                    <a href="https://mingclee.medium.com/paypal-vs-credit-card-visa-master-961c6f13c604"
                        target="_blank">
                        <img src="photo/pay.jpg" alt="" class="pay">
                    </a>

                    <br> <br>

                    <h5 class="sm">
                        Since 2010 BIKE<span style="color: rgb(179, 10, 10) ; font-weight: bold;  ">2</span>RIDE <br>
                        specialist in selling bikes

                    </h5>








                </div>

            </div>

            <div class="credit"> © Bike2Ride 2022 Credite By Yaakoub Chaker -Ranking Referencing Offers - Help and
                contact -
                Site map -
                Credits and legal notices - Personal data - Cookies policy </div>



        </section>
        <!-- end footer  -->
        <!-- for navs  -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>

        <script src="javascript/default.js"></script>
        <script src="javascript/Payments.js"></script>
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
            crossorigin="anonymous"></script>



</body>

</html>