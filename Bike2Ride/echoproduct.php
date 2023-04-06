<!DOCTYPE html>

<?php 
session_start();
if (isset($_SESSION['userId'])){
    $userId=$_SESSION['userId'];
}


if(  empty( $_GET['product_id'])  ) {
    header('refresh:2;url=' . $_SERVER['HTTP_REFERER']);
    


   echo" <center>
    <b style='padding:30px; margin-top:30px; background-color:red; color:white; font-size:30px;' >product not found </b>
</center>" ;
die () ;


}

$product_id = $_GET['product_id'];

require('config.php');
$sql = "SELECT * FROM product p LEFT JOIN sizestock s ON s.product_id=p.product_id WHERE s.product_id=$product_id ORDER BY p.product_id;";
$result = mysqli_query($con, $sql);
require('resultNO.php');

$row=mysqli_fetch_array($result) ;

$Category = $row['Category'];
$brandName  = $row['brandName'];
$title = $row['title'];
$color1  = $row['color1'];
$color2 = $row['color2'];
$price  = $row['price'];
$discount = $row['discount'];
$points  = $row['points'];
$descriptions = $row['descriptions'];
$made  = $row['made'];
$code = $row['code'];
$gender  = $row['gender'];
$material = $row['material'];
$model  = $row['model'];
 $weightt  = $row['weightt'];

$categoryName  = $row['categoryName'];
$activity  = $row['activity'];
$chain = $row['chain'];
$sys  = $row['sys'];

$ext  = $row['ext'];
$priceAfter = ($price - ($price * $discount / 100));

if($Category =='bike'){
    $cat = 1;

} 
else{
    $cat = 0;
}










$sql = "SELECT * FROM product p LEFT JOIN sizestock s ON s.product_id=p.product_id WHERE s.product_id=$product_id ORDER BY p.product_id;";
$result = mysqli_query($con, $sql);
require('resultNO.php');

// $age=array("size1"=>0 ,"siz2"=>0,"siz3"=>0); 


for($i=1;$i<=mysqli_num_rows($result); $i++)

{ $row=mysqli_fetch_assoc($result);

   
    $quantity = $row['quantity'];
    $Arrayquantity["quantity$i"] = $quantity;

    $size = $row['size'];
    $Arraysize["size$i"] = $size;
    // echo $size["size$i"];

    // array_push($size,[  ".$sizeQ."  =>".$quantiteS." ]); 
    // echo "Peter is " . $size[$sizeQ] . " years old.";
 
}


$quantity1=$Arrayquantity["quantity3"];//S
$quantity2=$Arrayquantity["quantity2"]; //M
$quantity3=$Arrayquantity["quantity1"];//L

$size1=$Arraysize["size3"];//S
$size2=$Arraysize["size2"]; //M
$size3=$Arraysize["size1"];//L



$sql = "SELECT * FROM brands  WHERE brandName='$brandName' ;";
$result = mysqli_query($con, $sql);
require('resultNO.php');
$row=mysqli_fetch_array($result) ;

$brand_id = $row['brand_id'];
$brandext = $row['ext'];

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
    <!-- css link page echo bike  -->
    <link rel="stylesheet" href="css/echoBike2.css">


    <!-- ///////////////////////////////////////////// -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- ////////////////////////////////////////////////////////  -->

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<script src="ajaxAddToCart.js"></script>
<script src="ajaxAddToFav.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> 




    <title>Product </title>
</head>

<body > 

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

















    <!-- just delete this div and start  -->


    <div class="container-fuild ">
        <div class="row">
            <p class="where"> <a href="home.php">Home </a>>

            <?php
            if($Category=='bike'){
                echo "<a href='bikes.php'>Bikes</a> > <a href='bikes.php'>".$categoryName." Bikes</a>"; 
            } else{
                echo "<a href='accessories.php'>Accessories</a> > <a href='accessories.php'>".$Category."</a>"; 

            }
            
            
            ?>
             
        
                    </p>
        </div> <br>

        <div class="row mediaa">
            <div class="col-sm-12  col-lg-12   info">

                <p class="p1"> <?php echo $brandName;?></p>

                <p class="p2"><?php echo $title;?></p> <br>

                <p class="p3">
                    <a href="#RATINGSs">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        (No Rating)</a>
                </p> <br>
            </div>
        </div> <br>


        <div class="row allc">


            <div class="col-sm-12  col-lg-6   product">
                <img  src="productsImages/<?php echo $product_id; ?>.<?php echo $ext; ?>" alt="item">

                <p> <a href="guarantee.html">Price guarantee <i class="fa-solid fa-info"></i></a> </p>

            </div>


            <div class="col-sm-12  col-lg-6   info">

                <p class="p1"> <?php echo $brandName;?></p>

                <p class="p2"><?php echo $title;?></p> <br>

                <p class="p3">
                    <a href="#RATINGSs">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        (No Rating)</a>
                </p> <br>

              

                <?php
            if($Category=='bike'){
                echo "  <p class='p4'>
                bike category :<a href='categories.php?categoryName=".$categoryName."'> <b> ".$categoryName." bike </b></a>
                <!---->
            </p> <br>"; 
            } 
            
            
            ?>






                <div id="myBtnContainer">
                    <p class="p5">

                        <?php 
                           if($Category=='bike'){
                            echo " Wheel Size : "; 
                        } elseif($Category=='bottle'){
                            echo "Volume / ML : ";
                        }else{
                            echo"Size : ";
                        }
                        
                        ?>
                        

                   


                        <button value="<?php echo $size1;?>" type="menu" onclick="fnS()"
                            class="portfolio-buttons portfolio-buttons-normal"><?php echo $size1;?></button>
                        <button value="<?php echo $size2;?>" type="menu" onclick="fnM()"
                            class="portfolio-buttons portfolio-buttons-normal"><?php echo $size2;?></button>
                        <button value="<?php echo $size3;?>" type="menu" onclick="fnL()"
                            class="portfolio-buttons portfolio-buttons-normal"><?php echo $size3;?></button>


                </div>
                <form name="form"  id="cart" > 
                    <!-- zedet on submit return falce  -->
                    <p id="inp" style="display: none;"></p>
                    <!--the form-->
                    <!-- <b>

                            <select style="width:200px; border: 1px solid rgb(213, 213, 221);" name="size">
                                <option value="s">S</option>
                                <option value="m">M</option>
                                <option value="l">L</option>

                            </select>
                        </b> -->
                    </p> <br>

                    <p class="p6">
                        Color: <b> <?php echo $color1;?>, <?php echo $color2;?></b>
                    </p> <br>

                    <p class="p7"> <span> Discount <?php echo $discount;?> % <br></span>
                        <span class="prix"> <?php echo $priceAfter;?> € </span> <sub>RRP</sub> <?php echo $price;?> €
                    </p><br>
                    <p class="p8">
                        <span class="p811"> Availability : </span> <b><span id="qn"> please select a size.</span> </b>

                    </p> <br>




                    <!-- form qantite  -->




                    <p class="p9">

                    <input type="number" name="userId" value="<?php if (isset($_SESSION['userId'])) {
                        echo $userId;
                    }?>" hidden readonly id="userId"/>
                    <input type="number" name="product_id" value="<?php echo $product_id;?>" hidden readonly id="product_id"/>

                        <input type="button" onclick="decrementValue()" value="-" />
                        <input type="number" name="quantity" value="1" size="1" max="" id="number" />
                        <input type="button" onclick="incrementValue()" value="+" />

                        <?php
                        $login = 0;
                        
                        
                        if (isset($_SESSION['userId'])) {
                         $login=1;
                    }else{
                        $login=0;       }
                        ?>


                        <input  type="button" name="" id="subm" value="ADD TO CART" onclick="AddToCart(<?php echo $login;?>)" >
                        <!-- //kenat submit  -->
                        

                </form>  

                <?php
                $fav = 0;
                if (isset($_SESSION['userId'])){

                    $sql=" select *  from fav where userId ='$userId' and product_id ='$product_id' " ;
                    // for execute the query "sql" from the connection "con"
                    $result=mysqli_query($con,$sql) ;
                   
                   if (mysqli_num_rows($result) == 0) {
                        $fav = 0;
                   
                   }
                   else{
    
                        $fav = 1;
                   }


                }


               
               
                
                ?>
               




                </p> <br>
                <p class="p10" style="padding-left: 3px;"> 
                
                 
                  
               

                   <button type="button" id="bacnone" style="background: none;" onclick="AddToFav(<?php echo $login;?>,<?php echo $fav;?>) " from="formFav" >
                   <span id="favRed"> </span>  <span style="padding-left: 3px;"><b>Bookmarked</b></span>

                    </button>
              
                
                  

                </p> <br>
                <p class="p11">

                    <img src="photo/gan.webp" alt="point"> Earn <span> <?php echo $points;?> points </span> by ordering this product that
                    you can convert into a voucher.

                </p>


            </div>
        </div>

        <hr id="bare">


        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#DESCRIPTION">
                    <p class="p12">DESCRIPTION </p>
                </a></li>
            <li><a data-toggle="tab" href="#FACTSHEET">
                    <p class="p15">FACT SHEET </p>
                </a></li>
            <li><a data-toggle="tab" href="#RATINGS" id="RATINGSs">
                    <p class="p16">RATINGS</p>
                </a></li>

        </ul>


        <div class="tab-content">



            <div id="DESCRIPTION" class="tab-pane fade in active">




                <div class="row des">


                    <div class="col-sm-9   col-lg-8">


                        <br><br>
                        <p class="p133"><?php echo $title;?></p> <br>


                        <p class="p13">
                        <?php echo $descriptions;?>

                        </p>




                    </div>

                    <div id="p14" class="col-sm-3 col-lg-4 ">

                        <p class="p14"></p><center> <a href="brandProduct.php?brandName=<?php echo $brandName;?>"> <img src="BrandsImages/<?php echo $brand_id;?>.<?php echo $brandext;?>" alt=" brand" width="250px"></a> </center>
                    </div>

                </div>




            </div>
            <!-- ////////////////////////////////////////////////end of description  -->


            <div id="FACTSHEET" class="tab-pane fade">


                <div class="row mytab">
                    <div class="col-sm-12  col-lg-12 ">
                        <br><br>
                        <p class="p15">FACT SHEET OF <?php echo $title;?> </p> <br>


                        <table>
                            <tr></tr>

                            <tr>
                                <td id="title1">Product Name:</td>
                                <td id="descc"><?php echo $title;?></td>
                            </tr>
                            <tr>
                                <td id="title1">Manufacturer:</td>
                                <td id="descc"><?php echo $brandName;?> / <?php echo $made;?></td>
                            </tr>


                            <tr>
                                <td id="title1"> Item Code:</td>
                                <td id="descc"><?php echo $code;?></td>
                            </tr>


                            <?php if($cat==1){

                                echo" <tr>
                                <td id='title1'>activity:</td>
                                <td id='descc'>$activity </td>
                            </tr>";

                            }
                            
                            ?>

                           


                            <tr>
                                <td id="title1">gender:</td>
                                <td id="descc"><?php echo $gender;?></td>
                            </tr>


                            <tr>
                                <td id="title1">material:</td>
                                <td id="descc"> <?php echo $material;?></td>
                            </tr>


                            
                            <?php if($cat==1){

                             echo"

                             <tr > 
                             <td id='title1'>usage bikesport:</td>
                             <td id='descc'>  ".$categoryName." bike</td>
                         </tr>
                         <tr >
                             <td id='title1'>chain:</td>
                             <td id='descc'> $chain </td>
                         </tr>

                         <tr >
                             <td id='title1'> shifting system:</td>
                             <td id='descc'> $sys </td>
                         </tr>
                             
                             
                             ";

                            }
                            
                            ?>

                           
                            <tr>
                                <td id="title1"> Model year:</td>
                                <td id="descc"><?php echo $model;?></td>
                            </tr>
                            <tr>
                                <td id="title1"> Color:</td>
                                <td id="descc"> <?php echo $color1;?> , <?php echo $color2;?></td>
                            </tr>
                            <tr>
                                <td id="title1"> weight:</td>
                                <td id="descc"> <?php echo $weightt;?> g</td>
                            </tr>









                        </table>







                    </div>
                </div>





            </div>
            <!-- //////////////////////////////////////////////////////end face sgetts  -->



            <div id="RATINGS" class="tab-pane fade">


                <div class="row myrat" id="ra1">


                    <div class="col-sm-7  col-lg-9 ">
                        <br><br>
                        <p class="p17"> <span>Average: </span>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            (No Rating)
                        </p>
                    </div>

                    <div class="col-sm-5  col-lg-3 ">
                        <br><br>
                        <button class="p18" 
                        onclick='swal("  Write your own review:", {
                            content: "input",
                            buttons:"share"
                          })
                          ;
                          '
                        
                        >
                           
                            
                                <i class="fa-solid fa-pencil"></i> Rate this product
                            
                                
                        </button>
                        
                    </div>


                </div>









            </div>



        </div>


        <?php
        
        
        $sql=" select *  from product where brandName='$brandName' and Category='$Category' and color1='$color1' LIMIT 6;" ;

        $result = mysqli_query($con, $sql);
 
        require('resultNO.php');


       
        ?>
















        <hr id="bare">




        <div class="row myrela">
            <div class="col-sm-12  col-lg-12 ">
                <p class="p16">RELATED PRODUCTS : </p>
            </div>

            <div class="col-sm-12  col-lg-12 ">




                <!-- //////////////////////////start product  -->
                <div class="contNew">

                <?php


                    if(mysqli_num_rows($result)==1) {

                    echo "  <p> There are no products related to this product, it is unique, hurry up and order it now !!
                         </p> ";

                    }else{


                        for ($i = 0; $i < mysqli_num_rows($result); $i++) {
                            //get 1 record from the set ($result)
                            $row = mysqli_fetch_assoc($result);
                            if ($row['product_id'] != $_GET['product_id']) {
        
                                $product_id = $row['product_id'];
        
                                echo " <div>
        
                                <a href='echoproduct.php?product_id=$product_id'>
                                    <p class='p1'> ".$row['brandName']."</p>
                                    <p class='p2'>".$row['title']."
                                    </p>
                                    <p class='p3'><img src='productsImages/$product_id.".$row['ext']."' alt='product'></p>
                                    <p class='p4'>
        
                                        <span class='s22'> ".$row['price']." € </span>
                                    </p>
                                </a>
                            </div>";
                
                                
                
                            }
                        }


                    }
              
                
                ?>

                    <!-- <div>

                        <a href="echobike2.html">
                            <p class="p1"> Wilier</p>
                            <p class="p2"> Wilier GARDA Disc - Ultegra - NDR38 - Carbon Roadbike - 2023 - black red matt
                            </p>
                            <p class="p3"><img src="photo/bik.jpg" alt="product"></p>
                            <p class="p4">

                                <span class="s22"> 219,99 € </span>
                            </p>
                        </a>
                    </div>
                    <div>

                        <a href="echobike2.html">
                            <p class="p1"> Wilier</p>
                            <p class="p2"> Wilier GARDA Disc - Ultegra - NDR38 - Carbon Roadbike - 2023 - black red matt
                            </p>
                            <p class="p3"><img src="photo/bik.jpg" alt="product"></p>
                            <p class="p4">

                                <span class="s22"> 219,99 € </span>
                            </p>
                        </a>
                    </div>
                    <div>

                        <a href="echobike2.html">
                            <p class="p1"> Wilier</p>
                            <p class="p2"> Wilier GARDA Disc - Ultegra - NDR38 - Carbon Roadbike - 2023 - black red matt
                            </p>
                            <p class="p3"><img src="photo/bik.jpg" alt="product"></p>
                            <p class="p4">

                                <span class="s22"> 219,99 € </span>
                            </p>
                        </a>
                    </div>
                    <div>

                        <a href="echobike2.html">
                            <p class="p1"> Wilier</p>
                            <p class="p2"> Wilier GARDA Disc - Ultegra - NDR38 - Carbon Roadbike - 2023 - black red matt
                            </p>
                            <p class="p3"><img src="photo/bik.jpg" alt="product"></p>
                            <p class="p4">

                                <span class="s22"> 219,99 € </span>
                            </p>
                        </a>
                    </div> -->
                    <!-- <div>
            
                        <a href="echobike2.html">
                            <p class="p1"> Wilier</p>
                            <p class="p2"> Wilier GARDA Disc - Ultegra - NDR38 - Carbon Roadbike - 2023 - black red matt </p>
                            <p class="p3"><img src="photo/bik.jpg" alt="product"></p>
                            <p class="p4">
            
                                <span class="s22"> 219,99 € </span>
                            </p>
                        </a>
                    </div>
            
            
            
                </div> -->

                    <!-- //////////////////////////////////////////////end /'' -->








                </div>




            </div>



        </div>











        <!-- end here  Page content-->

        <!-- Don't touch anything below !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->


        <!-- start footer  -->

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
        <!-- <script src="javascript/echobike.js"></script> -->


        <script>
           




            
let max=1; // for the max input 
var input = document.getElementById("number");
input.setAttribute("max",max); // set a new value; 
document.getElementById("subm").disabled = true;
document.getElementById("number").disabled = true;

// end default valu 



/////////////for quantite +   -
function incrementValue()
{
    var value = parseInt(document.getElementById('number').value);
    value = isNaN(value) ? 0 : value;
    if(value<max){
        value++;
            document.getElementById('number').value = value;
    }
}
function decrementValue()
{
    var value = parseInt(document.getElementById('number').value);
    value = isNaN(value) ? 0 : value;
    if(value>1){
        value--;
            document.getElementById('number').value = value;
    }

}

////////////////////////////////////////////////////////// for button style and backround
/* Add the active class to the button passed in */
function setThisButtonActive(button) {
    button.classList.add("portfolio-buttons-active");
  }
  
  /* select all active buttons, and remove the active class from them */
  function resetActiveButton() {
    document.querySelectorAll(".portfolio-buttons-active").forEach((button) => {
      button.classList.remove("portfolio-buttons-active");
    });
  }
  
  document.querySelectorAll(".portfolio-buttons").forEach((button) => {
    button.addEventListener("click", function() {
      resetActiveButton();
      setThisButtonActive(button);
    });
  });
  /* Style the buttons */


//////////////////////////////for size  max and quantite max 


const size = {S:<?php echo $quantity1;?>, M:<?php echo $quantity2;?>, L:<?php echo $quantity3;?>} ;  //for size of product 





// if size small /////////////////////////////////////////////////////////

  function fnS(){
    document.getElementById("inp").innerHTML =" <input type='text' id='size'  name='size' value='<?php echo $size1;?>' hidden>";
     max = size.S;
     document.getElementById("subm").disabled = false;
      document.getElementById("number").disabled = false;
      
      
     if(max<1) {// is quantite is 0 
      document.getElementById("qn").innerHTML = "<span style='font-size: 12px;'> This size is no longer available </span>";
      document.getElementById("subm").disabled = true;
      document.getElementById("number").disabled = true;
      document.getElementById("subm").style.background = "#9ba7c0";

     } else{ 
      document.getElementById("qn").innerHTML = max +" pieces";
      document.getElementById("subm").style.background = "rgb(59, 117, 184)";


     }

     var input = document.getElementById("number");
input.setAttribute("max",max); // set a new value;
    
    

  }



//////if size is mediam //////////////////////////////////////////////////////


  function fnM(){
    document.getElementById("inp").innerHTML =" <input type='text' id='size'  name='size' value='<?php echo $size2;?>'hidden>";
    max = size.M;
    document.getElementById("subm").disabled = false;
    document.getElementById("number").disabled = false;


    if(max<1) { // is quantite is 0 
      document.getElementById("qn").innerHTML = "<span style='font-size: 12px;'> This size is no longer available </span>";
      document.getElementById("subm").disabled = true;
      document.getElementById("number").disabled = true;
      document.getElementById("subm").style.background = "#9ba7c0";

     } else{
      document.getElementById("qn").innerHTML = max+" pieces" ;
      document.getElementById("subm").style.background = "rgb(59, 117, 184)";

     }
     var input = document.getElementById("number");
input.setAttribute("max",max); // set a new value;
   

  }




// if size is large //////////////////////////////////////////////////////////

  function fnL(){
    document.getElementById("inp").innerHTML =" <input type='text' id='size'  name='size' value='<?php echo $size3;?>'hidden>";
    max = size.L;
    document.getElementById("subm").disabled = false;
    document.getElementById("number").disabled = false;


    if(max<1) {  // is quantite is 0 // is quantite is 0 
      document.getElementById("qn").innerHTML = "<span style='font-size: 12px;'> This size is no longer available </span>";
      document.getElementById("subm").disabled = true;
      document.getElementById("number").disabled = true;
      document.getElementById("subm").style.background = "#9ba7c0";

     } else{
      document.getElementById("qn").innerHTML = max+" pieces" ;
      document.getElementById("subm").style.background = "rgb(59, 117, 184)";

     }
     var input = document.getElementById("number");
input.setAttribute("max",max); // set a new value;

   }
////////////////////////////rolad a page dont 
// $(document).ready(function() {
//   $(document).on('submit', '#cart', function() {
//     // do your things
//     return false;
//    });
// });alkert by exemmple 


var form = document.getElementById('cart');

// function myFunctionalert() {
//   if (form.checkValidity()) {
   
   
//     swal({
//       title: "You have successfully added this item",
    
//       icon: "success",
//       buttons: {
//       cancel: "CONTINUE SHOPPING",
     
//       cart:  "Order Now",
  
//     },cartButtonColor: "black",
  
      
  
      
      
//   }).then((value) => {
//     switch (value) {
   
//    case "cart":
//    window.location.href = `cart.html` ;}
    
  
  
//   });
//   }
// }




 
   
// function notAbike(cat) {
//   if (cat==0) {
//     document.getElementsByClassName("notaBike").style.display = "none";

//   }

// }




if(<?php echo $fav;?>==1)
{
    document.getElementById('favRed').style.color = 'red' ;
    document.getElementById('favRed').style.fontSize = '19px' ;
    document.getElementById("favRed").innerHTML = " <i class='fa-solid fa-heart'></i>";
}else{
    document.getElementById("favRed").innerHTML = " <i class='fa-regular fa-heart'></i>";
}














        </script>

        <!-- /////////////////////////////////////////////////////////// -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <!-- ////////////////////////////////////////////////////////////////////// -->
        <!-- for sweet allert  -->
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> 

        <!-- /////////////submit and do not rolad page  -->

        <!-- <script src="https://code.jquery.com/jquery-2.2.1.min.js"></script> -->

</body>

</html>