
<?php

// $allData = '';
$Category="";
$conn = mysqli_connect("localhost", "root", "","bike2ride3");
header("Content-Type: JSON"); 
if (isset($_GET['Category'])) {
 $Category=$_GET['Category'];

//  echo $brandName;
 $query = "SELECT * FROM product WHERE Category = '$Category'";
 $result = mysqli_query($conn, $query) or die( mysqli_error($conn));


}
?>


<!DOCTYPE html>
<html lang="en">
    

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- favicon -->
    <link rel="icon" type="image/x-icon" href="photo/favi.png"> <!--8ayaret-->

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

            <a href="home.html" class="logo"><i class="fa-solid fa-bicycle" style="color:rgb(46, 25, 46);"></i>
                Bike<span style="color: rgb(179, 10, 10) ; font-weight: bold; font-size: larger; ">2</span>Ride</a>

            <form action="search.php" method="get" class="search-form" id="search">
                <input type="search" name="word" placeholder="search here..." id="search-box">
                <button type="submit" class="fix" style="background: 0;  border: none !important; "><label for="search-box" class="fas fa-search"  ></label>
                </button>
             
                
            </form>


            <div class="icons">
                <div id="search-btn" class="fas fa-search"> </div>
                <a href="fav.html" class="fa fa-heart"></a>
                <a href="cart.html" class="fa fa-shopping-cart"></a>

                <a href="user.html">
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
        <a  href="bikes.php"> Bikes</a>
        <a href="accessories.php"> Accessories </a>
        <a href="brand.php"> Brand</a>
        <a href="about.html"> About</a>




    </nav>


    <nav id="navigation">
        <!-- container -->
        <div class="container">
            <!-- responsive-nav -->
            <div id="responsive-nav">
                <!-- NAV -->
                <ul  style="flex-direction: row;" class="main-nav nav navbar-nav">
                    <li class="active"><a href="#">Accessories</a></li>
                    <li><a href="accproduts.php?Category=bottle">bottles</a></li>
                    <li><a href="accproduts.php?Category=helmet">helmit</a></li>
                    <li><a href="accproduts.php?Category=gloves">gloves</a></li>
                </ul>
                <!-- /NAV -->
            </div>
            <!-- /responsive-nav -->
        </div>
        <!-- /container -->
    </nav>



    <div class="col-sm-6 col-md-4 text-center myfilterbikes">
        <div class="col-sm-12 col-md-12   ">
            <h3 style="text-align: left;padding-left: 20px;padding-top: 20px;">Filters</h3>
            <h5 class="myfliterText">Categories</h5>

            <form action="" method="post">
                <div class=" col-md-12 myradio ">
                    <input type="radio" name="cati" value="Bikes" id="maniBike"> <span>Bike </span>
                    <input type="radio" name="cati" value="Bikes" id="maniBike"> <span>Helmit </span>
                    <input type="radio" name="cati" value="Bikes" id="maniBike"> <span>Bottes </span>
                    <input type="radio" name="cati" value="Bikes" id="maniBike"> <span>Gloves </span>
                </div>



                <h5 class="myfliterText  ">Prouduces</h5>


                <div class=" col-md-12 myradio ">
                    <input class="mylist" list="browsers" name="browser" id="browser" placeholder="Select your fav pro">
                    <datalist id="browsers">
                        <option class="optionstylee" value="France"></option>
                        <option class="optionstylee" value="Italy"></option>
                        <option class="optionstylee" value="Spain"></option>
                        <option class="optionstylee" value="Germany"></option>
                        <option class="optionstylee" value="Chaina"></option>
                    </datalist>



                </div>

                <h5 class="myfliterText  ">Brand</h5>



                <div class=" col-md-12 myradio ">
                    <input class="mylist" list="DLbrand" name="brands" id="brands" placeholder="Select your fav brand">
                    <datalist id="DLbrand">
                        <option value="Connondale"></option>
                        <option value="Asics"></option>
                        <option value="Campagnolo"></option>
                        <option value="Cube"></option>
                        <option value="Giro"></option>
                        <option value="Scott"></option>
                        <option value="Endura"></option>
                        <option value="GoreWear"></option>
                    </datalist>



                </div>

                <h5 class="myfliterText  ">Color</h5>
                <select class="myfilterselect">
                    <option></option>
                    <!-- <option disabled="none">pick up your color</option> -->
                    <option>Black</option>
                    <option>White</option>
                    <option>Blue</option>
                    <option>Green</option>
                    <option>Yellow</option>
                    <option>Brown</option>
                    <option>Purple</option>
                    <option>Red</option>
                    <option>Pink</option>
                    <option>Grey</option>


                </select>


              

                <h5 class="myfliterText">orderd for</h5>

                <div class=" col-md-12 myradio ">
                    <input type="radio" name="gender" value="Bikes" id="gendeeM"> <span>Male </span>
                    <input type="radio" name="gender" value="Bikes" id="genderF"> <span>Female </span>
                    <input type="radio" name="gender" value="Bikes" id="genderU"> <span>UniSex </span>

                </div>

                <h5 class="myfliterText  ">Material</h5>


                <div class=" col-md-12 myradio ">
                    <input class="mylist" list="MaterialList" id="idinputMat" placeholder="Select your fav Mat">
                    <datalist id="MaterialList">
                        <option class="optionstylee" value="Alaminum">
                        <option class="optionstylee" value="Titanium">
                            <!-- <option class="optionstylee" value="plastic">
                      <option class="optionstylee" value="Germany">
                      <option class="optionstylee" value="Chaina"> -->



                </div>


                <div class=" col-md-12">
                    <h5 style="margin-top: 20px;">Min price <input style="border: 10px;" type="number"
                            id="priceMinNumber" class="hadiInputNumber" placeholder="100"></h5>
                </div>
                <div class=" col-md-12 ">
                    <h5 style="margin-top: 10px;">Max price<input type="number" id="priceMaxNumber"
                            class="hadiInputNumber" placeholder="1000" onblur="checkminMaxprice()"></h5>
                </div>
                <div class=" col-md-12 ">
                    <input type="button" class="fliterButton" value="My Filter">
                </div>


            </form>
        </div>



    </div>

    <div class="container">
        <div class="row ">







    <?php 
    for($i=0;$i<mysqli_num_rows($result); $i++)
    { 
     $row=mysqli_fetch_assoc($result);
     
  echo '<div class="col-sm-6 col-md-4">
  <a href="echoproduct.php?product_id='.$row["product_id"].'&Category='.$row["Category"].'">
  <div class="product">
      <div class="product-img">
      <img src="productsImages/'.$row["product_id"].'.'.$row["ext"].'">
          <div class="product-label">
          </div>
      </div>
      <div class="product-body">
          <p class="product-category">' . $row["brandName"] . '</p>
          <h3 class="product-name"><a href="#">' . $row["title"] . '</a></h3>
          <div class="product-btns">
              <button class="add-to-wishlist"><i class="fa fa-heart-o"></i></button>

          </div>
          <h4 style="padding-top: 7px;" class="product-price">' . $row["price"] . '
              <!-- <del class="product-old-price">$990.00</del> -->
          </h4>
          <div class="product-rating">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
          </div>

      </div>
      <div class="add-to-cart">
          <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
      </div>
  </div>
</a>
</div>';
 
 
    } ?>



          
            
        </div>
    </div>

            
      




    </header>



    <!-- Don't touch anything above!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->

 
    
    <!-- start from here  Page content  -->


    <!-- If the the fisrt centent  is a large picture that touche the navbar , do not put a <br/> -->


    <!-- And if the first content is not an image, you must put a <br/>  example:  text or title -->

















    <!-- just delete this div and start  -->
<!-- 
    <div class="principal">

        <br><br><br><br><br><br><br><br><br><br>


        <center>
            <p style=" font-size: 100px; ">Page content</p>
        </center>
        <br><br><br><br><br><br><br><br><br><br>


    </div> -->
    

















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

</body>

</html>