<!DOCTYPE html>



<?php

session_start();
if(!isset($_SESSION['layer'])|| $_SESSION['layer']==false ){// actuel user .. dhhhar
    
    header("location:user.php") ;
    die();
}
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/ProductTools.css">

    <!-- font cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="javascript/productTools.js"></script>







   




</head>

<body>






    <div class="container-fluid ">
        <h2>Product Tools :</h2>
        <br>
        <!-- Nav pills -->
        <ul class="nav nav-pills" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-bs-toggle="pill" href="#add"><i class="fa-regular fa-square-plus"></i>
                    Add a new product</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="pill" href="#edit"> <i class="fa-regular fa-pen-to-square"></i>

                    Edit / Remove Product </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="pill" href="#addBrand"> <i class="fa-regular fa-square-plus"></i>

                    Add a new brand </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="pill" href="#addCat"> <i class="fa-regular fa-square-plus"></i>

                    Add  bike category</a>
            </li>

        </ul>

        <!-- Tab panes -->
        <div class="tab-content">

            <div id="add" class="container-fluid tab-pane active" style="padding-left: 0;"><br>


                <!-- product category    product category    product category    product category    product category    product category  -->


                <div class="container-fluid " style="padding-left: 0;">
                    <h6>Please select a category :</h6>
                    <br>
                    <!-- Nav pills -->
                    <ul class="nav nav-pills" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="pill" href="#Bikes">Add a new Bikes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="pill" href="#helmets">Add a new Helmets</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="pill" href="#botles">Add a new Botles </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="pill" href="#gloves">Add a new Gloves </a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">





                        <!-- /////////add a new bikes  -->
                        <div id="Bikes" class="container-fluid tab-pane active"><br>
                            <hr>

                            <p> <b> Note: </b> Be sure to enter all product information</p>
                            <p><span class="required">*</span> required</p><br>
                            <form action="registerProduct.php" method='POST' enctype='multipart/form-data'>

                         






                                <div class="container-fluid">
                                    <div class="row">

                                        <div class="col-sm-12 col-md-6 col-lg-6   ">
                                            <!--     style="border-right:1px solid black ;"-->

                                            <div class="row">
                                                <!-- brand -->

                                                <div class="col-lg-3 col-md-3">
                                                <input type="text" name="Category" required value="bike"  hidden readonly>
                                                    <span class="title"> Brand<span class="required">*</span> </span>

                                                    


                                                </div>
                                                <div class="col-lg-9  col-md-9">

                                            

                                          <select  name="brandName"  required class="mem" id="meme" placeholder="willer">
                                                
                                         <?php
                                         
                                           require("selectBrand.php");
                                           
                                           
                                           ?>

                                            </select>



                                                </div>

                                            </div>
                                            <br>

                                            <div class="row">
                                                <!-- title -->

                                                <div class="col-lg-3 col-md-3 ">
                                                    <span class="title"> Title<span class="required">*</span> </span>


                                                </div>
                                                <div class="col-lg-9 col-md-9 ">
                                                    <input type="text" name="title" required class="mem"
                                                        placeholder="Wilier GARDA Disc -Ultegra -NDR38 -Carbon Road Bike - 2023- Black Red Matt">



                                                </div>

                                            </div>
                                            <br>

                                            <div class="row">
                                                <!-- category: -->

                                                <div class="col-lg-3 col-md-3 ">
                                                    <span class="title"> category<span class="required">*</span> </span>


                                                </div>
                                                <div class="col-lg-9  col-md-9">

                                                    <select name="categoryName"  required class="mem"  >
                                                    <?php
                                         
                                         require("selectCatBike.php");
                                         
                                         
                                         ?>


                                                       

                                                    </select>





                                                </div>

                                            </div>
                                            <br>
                                            <hr>



                                            <p> Wheel Size: </p>
                                            <!-- Wheel Size:  -->

                                            <div class="row">
                                                <!--small-->

                                                <div class="col-lg-3 col-md-3">
                                                    <span class="title"> Small<span class="required">*</span> </span>


                                                </div>
                                                <div class="col-lg-9 col-md-9">
                                                    
                                                <input type="text" name="size1" required value="S"  hidden readonly>

                                                    <input type="number" name="quantity1" required class="mem" value="0"
                                                        min="0">




                                                </div>

                                            </div>
                                            <div class="row">
                                                <!--small-->

                                                <div class="col-lg-3 col-md-3">
                                                    <span class="title"> Mediam<span class="required">*</span> </span>


                                                </div>
                                                <div class="col-lg-9 col-md-9 ">
                                                <input type="text" name="size2" required value="M"  hidden readonly>

                                            <input type="number" name="quantity2" required class="mem" value="0"
                                            min="0">




                                                </div>

                                            </div>
                                            <div class="row">
                                                <!--mediam -->

                                                <div class="col-lg-3 col-md-3">
                                                    <span class="title"> large<span class="required">*</span> </span>


                                                </div>
                                                <div class="col-lg-9 col-md-9 ">
                                                <input type="text" name="size3" required value="L"  hidden readonly>

                                        <input type="number" name="quantity3" required class="mem" value="0"
                                        min="0">




                                                </div>

                                            </div>







                                            <br>
                                            <hr>

                                            <p> colors :</p>



                                            <div class="row">
                                                <!-- color 1: -->

                                                <div class="col-lg-3 col-md-3">
                                                    <span class="title"> color1<span class="required">*</span> </span>


                                                </div>
                                                <div class="col-lg-9 col-md-9 ">

                                                    <select name="color1" required class="mem">
                                                        <option>beige</option>
                                                        <option>white</option>
                                                        <option>grey</option>
                                                        <option>black</option>
                                                        <option>brown</option>
                                                        <option>mole</option>
                                                        <option>blue</option>
                                                        <option>yellow</option>
                                                        <option>orange</option>
                                                        <option>pink</option>
                                                        <option>red</option>
                                                        <option>green</option>
                                                        <option>purple</option>
                                                        <option>multicolor</option>

                                                    </select>




                                                </div>

                                            </div>

                                            <div class="row">
                                                <!-- color 1: -->

                                                <div class="col-lg-3 col-md-3">
                                                    <span class="title"> color2 </span>


                                                </div>
                                                <div class="col-lg-9 col-md-9 ">

                                                    <select name="color2" class="mem">
                                                        <option>beige</option>
                                                        <option>white</option>
                                                        <option>grey</option>
                                                        <option>black</option>
                                                        <option>brown</option>
                                                        <option>mole</option>
                                                        <option>blue</option>
                                                        <option>yellow</option>
                                                        <option>orange</option>
                                                        <option>pink</option>
                                                        <option>red</option>
                                                        <option>green</option>
                                                        <option>purple</option>
                                                        <option>multicolor</option>

                                                    </select>




                                                </div>

                                            </div>


                                            <br>
                                            <hr>

                                            <div class="row">
                                                <!--price -->

                                                <div class="col-lg-3 col-md-3">
                                                    <span class="title"> price<span class="required">*</span> </span>


                                                </div>
                                                <div class="col-lg-9 col-md-9 ">
                                                    <input type="number" step="any" name="price" required class="mem" value="0"
                                                        min="0">




                                                </div>

                                            </div>

                                            <div class="row">
                                                <!--Discount -->

                                                <div class="col-lg-3 col-md-3">
                                                    <span class="title"> Discount<span class="required">*</span> </span>


                                                </div>
                                                <div class="col-lg-9 col-md-9 ">
                                                    <input type="number" step="any" name="discount" required class="mem" value="0"
                                                        min="0">




                                                </div>

                                            </div> <br>
                                            <hr>
                                            <div class="row">
                                                <!--point -->

                                                <div class="col-lg-3 col-md-3">
                                                    <span class="title"> Earn/Points<span class="required">*</span>
                                                    </span>


                                                </div>
                                                <div class="col-lg-9 col-md-9 ">
                                                    <input type="number" name="points" required class="mem" value="0"
                                                        min="0">




                                                </div>
                                            </div> <br>
                                            <hr>















                                        </div>


                                        <div class="col-sm-12 col-md-6 col-lg-6   ">

                                            <div class="row">
                                                <!--description -->

                                                <div class="col-lg-3 col-md-3">
                                                    <span class="title">Description<span class="required">*</span>
                                                    </span>


                                                </div>
                                                <div class="col-lg-9 col-md-9 ">
                                                    <textarea class="mem" rows="6" name="descriptions"
                                                        required></textarea>




                                                </div>
                                            </div>
                                            <hr>

                                            <div class="row">
                                                <!--made in  -->

                                                <div class="col-lg-3 col-md-3">
                                                    <span class="title"> Made in<span class="required">*</span> </span>


                                                </div>
                                                <div class="col-lg-9 col-md-9 ">
                                                    <input type="text" name="made" required class="mem"
                                                        placeholder="France">




                                                </div>

                                            </div> <br>

                                            <div class="row">
                                                <!--Item Activity: in  -->

                                                <div class="col-lg-3 col-md-3">
                                                    <span class="title"> Activity<span class="required">*</span> </span>


                                                </div>
                                                <div class="col-lg-9 col-md-9 ">
                                                    <input type="text" name="activity" required class="mem"
                                                        placeholder="Cycling">




                                                </div>

                                            </div> <br>

                                            <div class="row">
                                                <!--Item Code: in  -->

                                                <div class="col-lg-3 col-md-3">
                                                    <span class="title"> Item/Code<span class="required">*</span>
                                                    </span>


                                                </div>
                                                <div class="col-lg-9 col-md-9 ">
                                                    <input type="text" name="code" required class="mem"
                                                        placeholder="WIL550115">




                                                </div>

                                            </div> <br>
                                            <hr>

                                            <div class="row">
                                                <!--Gender in  -->

                                                <div class="col-lg-3 col-md-3">
                                                    <span class="title"> Gender<span class="required">*</span> </span>


                                                </div>
                                                <div class="col-lg-9 col-md-9 ">

                                                    <label for="men">Men </label>
                                                    <input type="radio" id="man" name="gender" value="male"
                                                        checked="checked"> |

                                                    <label for="women">Women</label>

                                                    <input type="radio" id="women" name="gender" value="female">|

                                                    <label for="uni">Unisex</label>

                                                    <input type="radio" id="uni" name="gender" value="unisex">




                                                </div>

                                            </div> <br>


                                            <div class="row">
                                                <!--Material  -->

                                                <div class="col-lg-3 col-md-3">
                                                    <span class="title"> Material<span class="required">*</span> </span>


                                                </div>
                                                <div class="col-lg-9 col-md-9 ">
                                                    <input type="text" name="material" required class="mem"
                                                        placeholder="Carbon">




                                                </div>

                                            </div> <br>

                                            <div class="row">
                                                <!--Chain  -->

                                                <div class="col-lg-3 col-md-3">
                                                    <span class="title"> Chain<span class="required">*</span> </span>


                                                </div>
                                                <div class="col-lg-9 col-md-9 ">
                                                    <input type="text" name="chain" required class="mem"
                                                        placeholder="Campagnolo EKAR CN21-EK13">




                                                </div>

                                            </div> <br>

                                            <div class="row">
                                                <!--Shifting System  -->

                                                <div class="col-lg-3 col-md-3">
                                                    <span class="title"> Shifting/SyS<span class="required">*</span>
                                                    </span>


                                                </div>
                                                <div class="col-lg-9 col-md-9 ">
                                                    <input type="text" name="sys" required class="mem"
                                                        placeholder="13-Speed ">




                                                </div>

                                            </div> <br>


                                            <div class="row">
                                                <!--Model Year:  -->

                                                <div class="col-lg-3 col-md-3">
                                                    <span class="title">Model/Year<span class="required">*</span>
                                                    </span>


                                                </div>
                                                <div class="col-lg-9 col-md-9 ">
                                                    <input type="number" name="model" required class="mem"
                                                        placeholder="2022" min="2000">




                                                </div>

                                            </div> <br>

                                            <div class="row">
                                                <!--Weight :  -->

                                                <div class="col-lg-3 col-md-3">
                                                    <span class="title">Weight<span class="required">*</span> </span>


                                                </div>
                                                <div class="col-lg-9 col-md-9 ">
                                                    <input type="number" name="weightt" required class="mem"
                                                        placeholder="8400g" min="0">




                                                </div>

                                            </div> <br>
                                            <hr>


                                        </div>

                                    </div>



                                </div>


                                <div class="row">
                                    <div class="col-sm-12 col-md-6 col-lg-6   " style="border: 1px solid gray;">


                                        <div class="row">
                                            <!--image  :  -->

                                            <div class="col-lg-3 col-md-3">
                                                <p><input type="file" accept="image/*" name="image" id="file"
                                                        onchange="loadFile(event)" style="display: none;" required></p>
                                                <p><label id="btnImage" class="title" for="file"
                                                        style="cursor: pointer;">Upload/Image<span
                                                            class="required">*</span></label></p>


                                            </div>
                                            <div class="col-lg-9 col-md-9 "> <br>
                                                <p
                                                    style="margin-left: 20px;border: 1px dotted gray; width: 260px; height: 260px;">
                                                    <img id="output" width="260px" />
                                                </p>




                                            </div>

                                        </div> <br>















                                    </div>

                                    <div class="col-sm-12 col-md-6 col-lg-6  sub ">

                                        <input type="submit" class="button button1" value="Add Product">







                                    </div>




                                </div>

                            </form>







                        </div>



                        <!-- /////////end add a new bikes  11111!!!!!!!!!!!!!!!!!-->









                        <!-- ...................................add new helmets .........................  -->


                        <div id="helmets" class="container-fluid  tab-pane fade"><br>
                            <p> <b> Note: </b> Be sure to enter all product information</p>
                            <p><span class="required">*</span> required</p><br>
                            <form action="registerProduct.php" method='POST' enctype='multipart/form-data'>




                                <div class="container-fluid">
                                    <div class="row">

                                        <div class="col-sm-12 col-md-6 col-lg-6   ">
                                            <!--     style="border-right:1px solid black ;"-->

                                            <div class="row">
                                                <!-- brand -->

                                                <div class="col-lg-3 col-md-3">
                                                <input type="text" name="Category" required value="helmet"  hidden readonly>
                                                    <span class="title"> Brand<span class="required">*</span> </span>


                                                </div>
                                                <div class="col-lg-9  col-md-9">
                                                <select  name="brandName"  required class="mem" id="meme" placeholder="willer">
                                                
                                                <?php
                                                
                                                  require("selectBrand.php");
                                                  
                                                  
                                                  ?>
       
                                                   </select>



                                                </div>

                                            </div>
                                            <br>

                                            <div class="row">
                                                <!-- title -->

                                                <div class="col-lg-3 col-md-3 ">
                                                    <span class="title"> Title<span class="required">*</span> </span>


                                                </div>
                                                <div class="col-lg-9 col-md-9 ">
                                                    <input type="text" name="title" required class="mem"
                                                        placeholder="Wilier GARDA Disc -Ultegra -NDR38 -Carbon Road Bike - 2023- Black Red Matt">



                                                </div>

                                            </div>
                                            <br>

                                            <!-- isi the old cat  -->

                                            <hr>



                                            <p> Wheel Size: </p>
                                            <!-- Wheel Size:  -->

                                            <div class="row">
                                                <!--small-->

                                                <div class="col-lg-3 col-md-3">
                                                    <span class="title"> Small<span class="required">*</span> </span>


                                                </div>
                                                <div class="col-lg-9 col-md-9">
                                                <input type="text" name="size1" required value="S"  hidden readonly>

                                                 <input type="number" name="quantity1" required class="mem" value="0"
                                                      min="0">




                                                </div>

                                            </div>
                                            <div class="row">
                                                <!--small-->

                                                <div class="col-lg-3 col-md-3">
                                                    <span class="title"> Mediam<span class="required">*</span> </span>


                                                </div>
                                                <div class="col-lg-9 col-md-9 ">
                                                <input type="text" name="size2" required value="M"  hidden readonly>

                                            <input type="number" name="quantity2" required class="mem" value="0" min="0">




                                                </div>

                                            </div>
                                            <div class="row">
                                                <!--mediam -->

                                                <div class="col-lg-3 col-md-3">
                                                    <span class="title"> large<span class="required">*</span> </span>


                                                </div>
                                                <div class="col-lg-9 col-md-9 ">
                                                <input type="text" name="size3" required value="L"  hidden readonly>


                                                <input type="number" name="quantity3" required class="mem" value="0" min="0">





                                                </div>

                                            </div>







                                            <br>
                                            <hr>

                                            <p> colors :</p>



                                            <div class="row">
                                                <!-- color 1: -->

                                                <div class="col-lg-3 col-md-3">
                                                    <span class="title"> color1<span class="required">*</span> </span>


                                                </div>
                                                <div class="col-lg-9 col-md-9 ">

                                                    <select name="color1" required class="mem">
                                                        <option>beige</option>
                                                        <option>white</option>
                                                        <option>grey</option>
                                                        <option>black</option>
                                                        <option>brown</option>
                                                        <option>mole</option>
                                                        <option>blue</option>
                                                        <option>yellow</option>
                                                        <option>orange</option>
                                                        <option>pink</option>
                                                        <option>red</option>
                                                        <option>green</option>
                                                        <option>purple</option>
                                                        <option>multicolor</option>

                                                    </select>




                                                </div>

                                            </div>

                                            <div class="row">
                                                <!-- color 1: -->

                                                <div class="col-lg-3 col-md-3">
                                                    <span class="title"> color2 </span>


                                                </div>
                                                <div class="col-lg-9 col-md-9 ">

                                                    <select name="color2" class="mem">
                                                        <option>beige</option>
                                                        <option>white</option>
                                                        <option>grey</option>
                                                        <option>black</option>
                                                        <option>brown</option>
                                                        <option>mole</option>
                                                        <option>blue</option>
                                                        <option>yellow</option>
                                                        <option>orange</option>
                                                        <option>pink</option>
                                                        <option>red</option>
                                                        <option>green</option>
                                                        <option>purple</option>
                                                        <option>multicolor</option>

                                                    </select>




                                                </div>

                                            </div>


                                            <br>
                                            <hr>

                                            <div class="row">
                                                <!--price -->

                                                <div class="col-lg-3 col-md-3">
                                                    <span class="title"> price<span class="required">*</span> </span>


                                                </div>
                                                <div class="col-lg-9 col-md-9 ">
                                                <input type="number" step="any" name="price" required class="mem" value="0"
                                                        min="0">




                                                </div>

                                            </div>

                                            <div class="row">
                                                <!--Discount -->

                                                <div class="col-lg-3 col-md-3">
                                                    <span class="title"> Discount<span class="required">*</span> </span>


                                                </div>
                                                <div class="col-lg-9 col-md-9 ">
                                                <input type="number" step="any" name="discount" required class="mem" value="0"
                                                        min="0">




                                                </div>

                                            </div> <br>
                                            <hr>
                                            <div class="row">
                                                <!--point -->

                                                <div class="col-lg-3 col-md-3">
                                                    <span class="title"> Earn/Points<span class="required">*</span>
                                                    </span>


                                                </div>
                                                <div class="col-lg-9 col-md-9 ">
                                                <input type="number" name="points" required class="mem" value="0"
                                                        min="0">




                                                </div>
                                            </div> <br>
                                            <hr>















                                        </div>


                                        <div class="col-sm-12 col-md-6 col-lg-6   ">

                                            <div class="row">
                                                <!--description -->

                                                <div class="col-lg-3 col-md-3">
                                                    <span class="title">Description<span class="required">*</span>
                                                    </span>


                                                </div>
                                                <div class="col-lg-9 col-md-9 ">
                                                <textarea class="mem" rows="6" name="descriptions"
                                                        required></textarea>




                                                </div>
                                            </div>
                                            <hr>

                                            <div class="row">
                                                <!--made in  -->

                                                <div class="col-lg-3 col-md-3">
                                                    <span class="title"> Made in<span class="required">*</span> </span>


                                                </div>
                                                <div class="col-lg-9 col-md-9 ">
                                                <input type="text" name="made" required class="mem"
                                                        placeholder="France">




                                                </div>

                                            </div> <br>



                                            <div class="row">
                                                <!--Item Code: in  -->

                                                <div class="col-lg-3 col-md-3">
                                                    <span class="title"> Item/Code<span class="required">*</span>
                                                    </span>


                                                </div>
                                                <div class="col-lg-9 col-md-9 ">
                                                <input type="text" name="code" required class="mem"
                                                        placeholder="WIL550115">




                                                </div>

                                            </div> <br>
                                            <hr>

                                            <div class="row">
                                                <!--Gender in  -->

                                                <div class="col-lg-3 col-md-3">
                                                    <span class="title"> Gender<span class="required">*</span> </span>


                                                </div>
                                                <div class="col-lg-9 col-md-9 ">

                                                    <label for="men">Men </label>
                                                    <input type="radio" id="man" name="gender" value="male"
                                                        checked="checked"> 

                                                    <label for="women">Women</label>

                                                    <input type="radio" id="women" name="gender" value="female">|

                                                    <label for="uni">Unisex</label>

                                                    <input type="radio" id="uni" name="gender" value="unisex">




                                                </div>

                                            </div> <br>


                                            <div class="row">
                                                <!--Material  -->

                                                <div class="col-lg-3 col-md-3">
                                                    <span class="title"> Material<span class="required">*</span> </span>


                                                </div>
                                                <div class="col-lg-9 col-md-9 ">
                                                <input type="text" name="material" required class="mem"
                                                        placeholder="Carbon">




                                                </div>

                                            </div> <br> <br>






                                            <div class="row">
                                                <!--Model Year:  -->

                                                <div class="col-lg-3 col-md-3">
                                                    <span class="title">Model/Year<span class="required">*</span>
                                                    </span>


                                                </div>
                                                <div class="col-lg-9 col-md-9 ">
                                                <input type="number" name="model" required class="mem"
                                                        placeholder="2022" min="2000">




                                                </div>

                                            </div> <br>

                                            <div class="row">
                                                <!--Weight :  -->

                                                <div class="col-lg-3 col-md-3">
                                                    <span class="title">Weight<span class="required">*</span> </span>


                                                </div>
                                                <div class="col-lg-9 col-md-9 ">
                                                <input type="number" name="weightt" required class="mem"
                                                        placeholder="8400g" min="0">


                                                <!-- hidden inputs  -->
                                                <input type="text" name="categoryName" required hidden readonly>
                                                <input type="text" name="activity" required   hidden readonly>
                                                <input type="text" name="chain" required   hidden readonly>
                                                <input type="text" name="sys" required  hidden readonly>
                                                

                                                 <!-- hidden inputs  -->




                                                </div>

                                            </div> <br>
                                            <hr>


                                        </div>

                                    </div>



                                </div>


                                <div class="row">
                                    <div class="col-sm-12 col-md-6 col-lg-6   " style="border: 1px solid gray;">


                                        <div class="row">
                                            <!--image  :  -->


                                            <div class="col-lg-3 col-md-3">
                                                <p><input type="file" accept="image/*" name="image" id="fileh"
                                                        onchange="loadFileh (event)" style="display: none;" required>
                                                </p>
                                                <p><label id="btnImage" class="title" for="fileh"
                                                        style="cursor: pointer;">Upload/Image<span
                                                            class="required">*</span></label></p>


                                            </div>
                                            <div class="col-lg-9 col-md-9 "> <br>
                                                <p
                                                    style="margin-left: 20px;border: 1px dotted gray; width: 260px; height: 260px;">
                                                    <img id="outputh" width="260px" />
                                                </p>




                                            </div>

                                        </div> <br>















                                    </div>

                                    <div class="col-sm-12 col-md-6 col-lg-6  sub ">

                                        <input type="submit" class="button button1" value="Add Product">







                                    </div>




                                </div>

                            </form>




                        </div>

                        <!--m ////////////////////////////end of helmets lllllllllllllllllllll -->





                       <!-- ...................................add new bottle .........................  -->

                       <div id="botles" class="container-fluid  tab-pane fade"><br>
                        <p> <b> Note: </b> Be sure to enter all product information</p>
                        <p><span class="required">*</span> required</p><br>
                        <form action="registerProduct.php" method='POST' enctype='multipart/form-data'>




                            <div class="container-fluid">
                                <div class="row">

                                    <div class="col-sm-12 col-md-6 col-lg-6   ">
                                        <!--     style="border-right:1px solid black ;"-->

                                        <div class="row">
                                            <!-- brand -->

                                            <div class="col-lg-3 col-md-3">
                                            <input type="text" name="Category" required value="bottle"  hidden readonly>
                                                    <span class="title"> Brand<span class="required">*</span> </span>


                                            </div>
                                            <div class="col-lg-9  col-md-9">
                                               

                                            <select  name="brandName"  required class="mem" id="meme" placeholder="willer">
                                                
                                                <?php
                                                
                                                  require("selectBrand.php");
                                                  
                                                  
                                                  ?>
       
                                                   </select>


                                            </div>

                                        </div>
                                        <br>

                                        <div class="row">
                                            <!-- title -->

                                            <div class="col-lg-3 col-md-3 ">
                                                <span class="title"> Title<span class="required">*</span> </span>


                                            </div>
                                            <div class="col-lg-9 col-md-9 ">
                                            <input type="text" name="title" required class="mem"
                                                        placeholder="Wilier GARDA Disc -Ultegra -NDR38 -Carbon Road Bike - 2023- Black Red Matt">



                                            </div>

                                        </div>
                                        <br>

                                        <!-- isi the old cat  -->

                                        <hr>



                                        <p>Volume / Litre: </p>
                                        <!-- Wheel Size:  -->

                                        <div class="row">
                                            <!--small-->

                                            <div class="col-lg-3 col-md-3">
                                                <span class="title"> Volume 1<span class="required">*</span> </span>


                                            </div>
                                            <div class="col-lg-9 col-md-9">
                                                <input type="text" name="size1" required class="mem1" 
                                                     placeholder="500 Litre">
                                                    <input type="number" name="quantity1" required class="mem1" 
                                                    min="0" placeholder=" 200 pieces">




                                            </div>

                                        </div>
                                        <div class="row">
                                            <!--small-->

                                            <div class="col-lg-3 col-md-3">
                                                <span class="title"> Volume 2</span>


                                            </div>
                                            <div class="col-lg-9 col-md-9 ">
                                            <input type="text" name="size2" required class="mem1" 
                                                     placeholder="500 Litre">
                                                    <input type="number" name="quantity2" required class="mem1" 
                                                    min="0" placeholder=" 200 pieces">




                                            </div>

                                        </div>
                                        <div class="row">
                                            <!--mediam -->

                                            <div class="col-lg-3 col-md-3">
                                                <span class="title"> Volume 3 </span>


                                            </div>
                                            <div class="col-lg-9 col-md-9 ">
                                            <input type="text" name="size3" required class="mem1" 
                                                     placeholder="500 Litre">
                                                    <input type="number" name="quantity3" required class="mem1" 
                                                    min="0" placeholder=" 200 pieces">




                                            </div>

                                        </div>







                                        <br>
                                        <hr>

                                        <p> colors :</p>



                                        <div class="row">
                                            <!-- color 1: -->

                                            <div class="col-lg-3 col-md-3">
                                                <span class="title"> color1<span class="required">*</span> </span>


                                            </div>
                                            <div class="col-lg-9 col-md-9 ">

                                                <select name="color1" required class="mem">
                                                    <option>beige</option>
                                                    <option>white</option>
                                                    <option>grey</option>
                                                    <option>black</option>
                                                    <option>brown</option>
                                                    <option>mole</option>
                                                    <option>blue</option>
                                                    <option>yellow</option>
                                                    <option>orange</option>
                                                    <option>pink</option>
                                                    <option>red</option>
                                                    <option>green</option>
                                                    <option>purple</option>
                                                    <option>multicolor</option>

                                                </select>




                                            </div>

                                        </div>

                                        <div class="row">
                                            <!-- color 1: -->

                                            <div class="col-lg-3 col-md-3">
                                                <span class="title"> color2 </span>


                                            </div>
                                            <div class="col-lg-9 col-md-9 ">

                                                <select name="color2" class="mem">
                                                    <option>beige</option>
                                                    <option>white</option>
                                                    <option>grey</option>
                                                    <option>black</option>
                                                    <option>brown</option>
                                                    <option>mole</option>
                                                    <option>blue</option>
                                                    <option>yellow</option>
                                                    <option>orange</option>
                                                    <option>pink</option>
                                                    <option>red</option>
                                                    <option>green</option>
                                                    <option>purple</option>
                                                    <option>multicolor</option>

                                                </select>




                                            </div>

                                        </div>


                                        <br>
                                        <hr>

                                        <div class="row">
                                            <!--price -->

                                            <div class="col-lg-3 col-md-3">
                                                <span class="title"> price<span class="required">*</span> </span>


                                            </div>
                                            <div class="col-lg-9 col-md-9 ">
                                            <input type="number" step="any" name="price" required class="mem" value="0"
                                                        min="0">




                                            </div>

                                        </div>

                                        <div class="row">
                                            <!--Discount -->

                                            <div class="col-lg-3 col-md-3">
                                                <span class="title"> Discount<span class="required">*</span> </span>


                                            </div>
                                            <div class="col-lg-9 col-md-9 ">
                                            <input type="number" step="any" name="discount" required class="mem" value="0"
                                                        min="0">




                                            </div>

                                        </div> <br>
                                        <hr>
                                        <div class="row">
                                            <!--point -->

                                            <div class="col-lg-3 col-md-3">
                                                <span class="title"> Earn/Points<span class="required">*</span>
                                                </span>


                                            </div>
                                            <div class="col-lg-9 col-md-9 ">
                                            <input type="number" name="points" required class="mem" value="0"
                                                        min="0">




                                            </div>
                                        </div> <br>
                                        <hr>















                                    </div>


                                    <div class="col-sm-12 col-md-6 col-lg-6   ">

                                        <div class="row">
                                            <!--description -->

                                            <div class="col-lg-3 col-md-3">
                                                <span class="title">Description<span class="required">*</span>
                                                </span>


                                            </div>
                                            <div class="col-lg-9 col-md-9 ">
                                            <textarea class="mem" rows="6" name="descriptions"
                                                        required></textarea>




                                            </div>
                                        </div>
                                        <hr>

                                        <div class="row">
                                            <!--made in  -->

                                            <div class="col-lg-3 col-md-3">
                                                <span class="title"> Made in<span class="required">*</span> </span>


                                            </div>
                                            <div class="col-lg-9 col-md-9 ">
                                            <input type="text" name="made" required class="mem"
                                                        placeholder="France">




                                            </div>

                                        </div> <br>



                                        <div class="row">
                                            <!--Item Code: in  -->

                                            <div class="col-lg-3 col-md-3">
                                                <span class="title"> Item/Code<span class="required">*</span>
                                                </span>


                                            </div>
                                            <div class="col-lg-9 col-md-9 ">
                                            <input type="text" name="code" required class="mem"
                                                        placeholder="WIL550115">




                                            </div>

                                        </div> <br>
                                        <hr>

                                        <div class="row">
                                            <!--Gender in  -->

                                            <div class="col-lg-3 col-md-3">
                                                <span class="title"> Gender<span class="required">*</span> </span>


                                            </div>
                                            <div class="col-lg-9 col-md-9 ">

                                                <label for="men">Men </label>
                                                <input type="radio" id="man" name="gender" value="male"
                                                    checked="checked"> |

                                                <label for="women">Women</label>

                                                <input type="radio" id="women" name="gender" value="female">|

                                                <label for="uni">Unisex</label>

                                                <input type="radio" id="uni" name="gender" value="unisex">




                                            </div>

                                        </div> <br>


                                        <div class="row">
                                            <!--Material  -->

                                            <div class="col-lg-3 col-md-3">
                                                <span class="title"> Material<span class="required">*</span> </span>


                                            </div>
                                            <div class="col-lg-9 col-md-9 ">
                                            <input type="text" name="material" required class="mem"
                                                        placeholder="Carbon">




                                            </div>

                                        </div> <br> <br>






                                        <div class="row">
                                            <!--Model Year:  -->

                                            <div class="col-lg-3 col-md-3">
                                                <span class="title">Model/Year<span class="required">*</span>
                                                </span>


                                            </div>
                                            <div class="col-lg-9 col-md-9 ">
                                            <input type="number" name="model" required class="mem"
                                                        placeholder="2022" min="2000">




                                            </div>

                                        </div> <br>

                                        <div class="row">
                                            <!--Weight :  -->

                                            <div class="col-lg-3 col-md-3">
                                                <span class="title">Weight<span class="required">*</span> </span>


                                            </div>
                                            <div class="col-lg-9 col-md-9 ">
                                            <input type="number" name="weightt" required class="mem"
                                                        placeholder="8400g" min="0">


                                                         <!-- hidden inputs  -->
                                                <input type="text" name="categoryName" required hidden readonly>
                                                <input type="text" name="activity" required   hidden readonly>
                                                <input type="text" name="chain" required   hidden readonly>
                                                <input type="text" name="sys" required  hidden readonly>
                                                

                                                 <!-- hidden inputs  -->




                                            </div>

                                        </div> <br>
                                        <hr>


                                    </div>

                                </div>



                            </div>


                            <div class="row">
                                <div class="col-sm-12 col-md-6 col-lg-6   " style="border: 1px solid gray;">


                                    <div class="row">
                                        <!--image  :  -->


                                        <div class="col-lg-3 col-md-3">
                                            <p><input type="file" accept="image/*" name="image" id="fileb"
                                                    onchange="loadFileb (event)" style="display: none;" required>
                                            </p>
                                            <p><label id="btnImage" class="title" for="fileb"
                                                    style="cursor: pointer;">Upload/Image<span
                                                        class="required">*</span></label></p>


                                        </div>
                                        <div class="col-lg-9 col-md-9 "> <br>
                                            <p
                                                style="margin-left: 20px;border: 1px dotted gray; width: 260px; height: 260px;">
                                                <img id="outputb" width="260px" />
                                            </p>




                                        </div>

                                    </div> <br>















                                </div>

                                <div class="col-sm-12 col-md-6 col-lg-6  sub ">

                                    <input type="submit" class="button button1" value="Add Product">







                                </div>




                            </div>

                        </form>




                    </div>

                        
                       <!-- ...................................add new gloves .........................  -->
                       <div id="gloves" class="container-fluid  tab-pane fade"><br>
                        <p> <b> Note: </b> Be sure to enter all product information</p>
                        <p><span class="required">*</span> required</p><br>
                        <form action="registerProduct.php" method='POST' enctype='multipart/form-data'>




                            <div class="container-fluid">
                                <div class="row">

                                    <div class="col-sm-12 col-md-6 col-lg-6   ">
                                        <!--     style="border-right:1px solid black ;"-->

                                        <div class="row">
                                            <!-- brand -->

                                            <div class="col-lg-3 col-md-3">
                                            <input type="text" name="Category" required value="gloves"  hidden readonly>
                                                    <span class="title"> Brand<span class="required">*</span> </span>


                                            </div>
                                            <div class="col-lg-9  col-md-9">

                                            <select  name="brandName"  required class="mem" id="meme" placeholder="BBB">
                                                
                                                <?php
                                                
                                                  require("selectBrand.php");
                                                  
                                                  
                                                  ?>
       
                                                   </select>
                                               
                                          
                                                        

                                            </div>

                                        </div>
                                        <br>

                                        <div class="row">
                                            <!-- title -->

                                            <div class="col-lg-3 col-md-3 ">
                                                <span class="title"> Title<span class="required">*</span> </span>


                                            </div>
                                            <div class="col-lg-9 col-md-9 ">
                                               

                                                    <input type="text" name="title" required class="mem"
                                                        placeholder="bon Road Bike - 2023- Black Red Matt">




                                            </div>

                                        </div>
                                        <br>

                                        <!-- isi the old cat  -->

                                        <hr>



                                        <p> Size: </p>
                                        <!-- Wheel Size:  -->

                                        <div class="row">
                                            <!--small-->

                                            <div class="col-lg-3 col-md-3">
                                                <span class="title"> Small<span class="required">*</span> </span>


                                            </div>
                                            <div class="col-lg-9 col-md-9">
                                            <input type="text" name="size1" required value="S"  hidden readonly>


                                            <input type="number" name="quantity1" required class="mem" value="0" min="0">




                                            </div>

                                        </div>
                                        <div class="row">
                                            <!--small-->

                                            <div class="col-lg-3 col-md-3">
                                                <span class="title"> Mediam<span class="required">*</span> </span>


                                            </div>
                                            <div class="col-lg-9 col-md-9 ">
                                            <input type="text" name="size2" required value="M"  hidden readonly>


                                            <input type="number" name="quantity2" required class="mem" value="0" min="0">




                                            </div>

                                        </div>
                                        <div class="row">
                                            <!--mediam -->

                                            <div class="col-lg-3 col-md-3">
                                                <span class="title"> large<span class="required">*</span> </span>


                                            </div>
                                            <div class="col-lg-9 col-md-9 ">
                                            <input type="text" name="size3" required value="L"  hidden readonly>


 
                                            <input type="number" name="quantity3" required class="mem" value="0" min="0">




                                            </div>

                                        </div>







                                        <br>
                                        <hr>

                                        <p> colors :</p>



                                        <div class="row">
                                            <!-- color 1: -->

                                            <div class="col-lg-3 col-md-3">
                                                <span class="title"> color1<span class="required">*</span> </span>


                                            </div>
                                            <div class="col-lg-9 col-md-9 ">

                                                <select name="color1" required class="mem">
                                                    <option>beige</option>
                                                    <option>white</option>
                                                    <option>grey</option>
                                                    <option>black</option>
                                                    <option>brown</option>
                                                    <option>mole</option>
                                                    <option>blue</option>
                                                    <option>yellow</option>
                                                    <option>orange</option>
                                                    <option>pink</option>
                                                    <option>red</option>
                                                    <option>green</option>
                                                    <option>purple</option>
                                                    <option>multicolor</option>

                                                </select>




                                            </div>

                                        </div>

                                        <div class="row">
                                            <!-- color 1: -->

                                            <div class="col-lg-3 col-md-3">
                                                <span class="title"> color2 </span>


                                            </div>
                                            <div class="col-lg-9 col-md-9 ">

                                                <select name="color2" class="mem">
                                                    <option>beige</option>
                                                    <option>white</option>
                                                    <option>grey</option>
                                                    <option>black</option>
                                                    <option>brown</option>
                                                    <option>mole</option>
                                                    <option>blue</option>
                                                    <option>yellow</option>
                                                    <option>orange</option>
                                                    <option>pink</option>
                                                    <option>red</option>
                                                    <option>green</option>
                                                    <option>purple</option>
                                                    <option>multicolor</option>

                                                </select>




                                            </div>

                                        </div>


                                        <br>
                                        <hr>

                                        <div class="row">
                                            <!--price -->

                                            <div class="col-lg-3 col-md-3">
                                                <span class="title"> price<span class="required">*</span> </span>


                                            </div>
                                            <div class="col-lg-9 col-md-9 ">
                                            <input type="number" step="any" name="price" required class="mem" value="0"
                                                        min="0">





                                            </div>

                                        </div>

                                        <div class="row">
                                            <!--Discount -->

                                            <div class="col-lg-3 col-md-3">
                                                <span class="title"> Discount<span class="required">*</span> </span>


                                            </div>
                                            <div class="col-lg-9 col-md-9 ">
                                            <input type="number" step="any" name="discount" required class="mem" value="0"
                                                        min="0">




                                            </div>

                                        </div> <br>
                                        <hr>
                                        <div class="row">
                                            <!--point -->

                                            <div class="col-lg-3 col-md-3">
                                                <span class="title"> Earn/Points<span class="required">*</span>
                                                </span>


                                            </div>
                                            <div class="col-lg-9 col-md-9 ">
                                            <input type="number" name="points" required class="mem" value="0"
                                                        min="0">




                                            </div>
                                        </div> <br>
                                        <hr>















                                    </div>


                                    <div class="col-sm-12 col-md-6 col-lg-6   ">

                                        <div class="row">
                                            <!--description -->

                                            <div class="col-lg-3 col-md-3">
                                                <span class="title">Description<span class="required">*</span>
                                                </span>


                                            </div>
                                            <div class="col-lg-9 col-md-9 ">
                                            <textarea class="mem" rows="6" name="descriptions"
                                                        required></textarea>




                                            </div>
                                        </div>
                                        <hr>

                                        <div class="row">
                                            <!--made in  -->

                                            <div class="col-lg-3 col-md-3">
                                                <span class="title"> Made in<span class="required">*</span> </span>


                                            </div>
                                            <div class="col-lg-9 col-md-9 ">
                                            <input type="text" name="made" required class="mem"
                                                        placeholder="France">




                                            </div>

                                        </div> <br>



                                        <div class="row">
                                            <!--Item Code: in  -->

                                            <div class="col-lg-3 col-md-3">
                                                <span class="title"> Item/Code<span class="required">*</span>
                                                </span>


                                            </div>
                                            <div class="col-lg-9 col-md-9 ">
                                            <input type="text" name="code" required class="mem"
                                                        placeholder="WIL550115">




                                            </div>

                                        </div> <br>
                                        <hr>

                                        <div class="row">
                                            <!--Gender in  -->

                                            <div class="col-lg-3 col-md-3">
                                                <span class="title"> Gender<span class="required">*</span> </span>


                                            </div>
                                            <div class="col-lg-9 col-md-9 ">

                                                <label for="men">Men </label>
                                                <input type="radio" id="man" name="gender" value="male"
                                                    checked="checked"> |

                                                <label for="women">Women</label>

                                                <input type="radio" id="women" name="gender" value="female">|

                                                <label for="uni">Unisex</label>

                                                <input type="radio" id="uni" name="gender" value="unisex">




                                            </div>

                                        </div> <br>


                                        <div class="row">
                                            <!--Material  -->

                                            <div class="col-lg-3 col-md-3">
                                                <span class="title"> Material<span class="required">*</span> </span>


                                            </div>
                                            <div class="col-lg-9 col-md-9 ">
                                            <input type="text" name="material" required class="mem"
                                                        placeholder="coton">




                                            </div>

                                        </div> <br> <br><br><br>






                                        <div class="row">
                                            <!--Model Year:  -->

                                            <div class="col-lg-3 col-md-3">
                                                <span class="title">Model/Year<span class="required">*</span>
                                                </span>


                                            </div>
                                            <div class="col-lg-9 col-md-9 ">
                                            <input type="number" name="model" required class="mem"
                                                        placeholder="2022" min="2000">


                                               <!-- hidden inputs  -->
                                               <input type="text" name="categoryName" required hidden readonly>
                                                <input type="text" name="activity" required   hidden readonly>
                                                <input type="text" name="chain" required   hidden readonly>
                                                <input type="text" name="sys" required  hidden readonly>
                                                <input type="number" name="weightt" value="5" required hidden readonly>
                                                

                                                 <!-- hidden inputs  -->




                                            </div>

                                        </div> <br>

                                        <hr>


                                    </div>

                                </div>



                            </div>


                            <div class="row">
                                <div class="col-sm-12 col-md-6 col-lg-6   " style="border: 1px solid gray;">


                                    <div class="row">
                                        <!--image  :  -->


                                        <div class="col-lg-3 col-md-3">
                                            <p><input type="file" accept="image/*" name="image" id="fileg"
                                                    onchange="loadFileg (event)" style="display: none;" required>
                                            </p>
                                            <p><label id="btnImage" class="title" for="fileg"
                                                    style="cursor: pointer;">Upload/Image<span
                                                        class="required">*</span></label></p>


                                        </div>
                                        <div class="col-lg-9 col-md-9 "> <br>
                                            <p
                                                style="margin-left: 20px;border: 1px dotted gray; width: 260px; height: 260px;">
                                                <img id="outputg" width="260px" />
                                            </p>




                                        </div>

                                    </div> <br>















                                </div>

                                <div class="col-sm-12 col-md-6 col-lg-6  sub ">

                                    <input type="submit" class="button button1" value="Add Product">







                                </div>




                            </div>

                        </form>




                    </div>

                        
                       <!-- ...................................add new gloves .........................  -->

                    </div>
                </div>



                <!-- ///////////////////////////////////////////////////////////////////////////end of product ,,,,,,,,,,,,,,, -->

            </div>



            <!-- ////////////////////////////////////////////////////start edit   ..............................-->


            <div id="edit" class="container-fluid tab-pane fade"><br>
                <div class="recent-grid" style="margin: auto; width: 97%; " id="display"  >
                <div style="height: 100%; width: 100%;" > 
                    <object type="text/html" data="searchEdit.html" width="100%" height="100%"  style="overflow:auto;border:none"> 
                    </object>
                 </div> 
                </div>
                <!-- <p>https://stackoverflow.com/questions/46044347/dynamic-box-search-with-html-and-css</p> -->

            </div> 
            <div id="addBrand" class="container-fluid tab-pane fade"><br>
                <div class="recent-grid" style="margin: auto; width: 97%; " id="display"  >
                <div style="height: 100%; width: 100%;" > 
                    <object type="text/html" data="addBrand.php" width="100%" height="100%"  style="overflow:auto;border:none"> 
                    </object>
                 </div> 
                </div>
              

            </div> 

            <div id="addCat" class="container-fluid tab-pane fade"><br>
                <div class="recent-grid" style="margin: auto; width: 97%; " id="display"  >
                <div style="height: 100%; width: 100%;" > 
                    <object type="text/html" data="addCatBike.php" width="100%" height="100%"  style="overflow:auto;border:none"> 
                    </object>
                 </div> 
                </div>
              

            </div>


        </div>
    </div>



</body>

<script>
    let loadFile = function (event) { // for the bike image 
        let image = document.getElementById('output');
        image.src = URL.createObjectURL(event.target.files[0]);
    };
    let loadFileh = function (event) { // for the helmets image 
        let image = document.getElementById('outputh');
        image.src = URL.createObjectURL(event.target.files[0]);
    };
    let loadFileb = function (event) { // for the botles image 
        let image = document.getElementById('outputb');
        image.src = URL.createObjectURL(event.target.files[0]);
    };
    let loadFileg = function (event) { // for the gloves image 
        let image = document.getElementById('outputg');
        image.src = URL.createObjectURL(event.target.files[0]);
    };


  


</script>







<script src="javascript/productTools.js"></script>
<script src="sweetalert.min.js"></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<?php 




if (isset($_GET['succ']) ) {

    echo '<script> swal({
        title: "DONE!",
        text: "The data has been entered successfully",
        icon: "success",
        button: "continue",
      });
    </script>';

       
   }

?>




</html>