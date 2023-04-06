<!DOCTYPE html>
<?php

session_start();
if(!isset($_SESSION['layer'])|| $_SESSION['layer']==false ){// actuel user .. dhhhar
    
    header("location:user.php") ;
    die();
}
?>

<?php



if (empty($_GET['product_id'])) {
    header('refresh:2;url=' . $_SERVER['HTTP_REFERER']);






    echo " <center>
    <b style='padding:30px; margin-top:30px; background-color:red; color:white; font-size:30px;' >ID not found </b>
</center>";
    die();


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










$sql = "SELECT * FROM product p LEFT JOIN sizestock s ON s.product_id=p.product_id WHERE s.product_id=$product_id ORDER BY p.product_id;";
$result = mysqli_query($con, $sql);
require('resultNO.php');

$age=array("size1"=>0 ,"siz2"=>0,"siz3"=>0); 

for($i=1;$i<=mysqli_num_rows($result); $i++)

{ $row=mysqli_fetch_assoc($result);

   
    $quantity = $row['quantity'];
    $size["size$i"] = $quantity;
    // echo $size["size$i"];

    // array_push($size,[  ".$sizeQ."  =>".$quantiteS." ]); 
    // echo "Peter is " . $size[$sizeQ] . " years old.";
 
}


$size1=$size["size3"];//S

$size2=$size["size2"];//M 
$size3=$size["size1"]; //L







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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>

<body>


    <a href="searchEdit.html" style="font-size:15px ; font-weight: bold;">BACK <i class="fa-solid fa-left-long">
        </i></a>



    <div id="Bikes" class="container-fluid tab-pane active"> <br>

        <p> Edit Product / Id =
            <?php echo $product_id ?>
        </p>
        <hr>

        <p> <b> Note: </b> Be sure to enter all product information</p>
        <p><span class="required">*</span> required</p><br>
        <form action="saveEditProduct.php" method='POST' enctype='multipart/form-data'>




            <div class="container-fluid">
                <div class="row">

                    <div class="col-sm-12 col-md-6 col-lg-6   ">
                        <!--     style="border-right:1px solid black ;"-->

                        <div class="row">
                            <!-- brand -->

                            <div class="col-lg-3 col-md-3">
                            <input type="number" name="product_id"  required value="<?php echo $product_id ?>"  hidden readonly>
                            <input type="text" name="ext"  required value="<?php echo $ext ?>"  hidden readonly>
                            <input type="text" name="Category"  required value="<?php echo $Category ?>"  hidden readonly>
                                                    <span class="title"> Brand<span class="required">*</span> </span>


                            </div>
                            <div class="col-lg-9  col-md-9">
                            <select  name="brandName"  required class="mem" id="brand" placeholder="willer">
                           
                                                
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
                            <input type="text" name="title" required class="mem" value="<?php echo $title ?>" 
                                                        placeholder="Wilier GARDA Disc -Ultegra -NDR38 -Carbon Road Bike - 2023- Black Red Matt">



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

                                                    <input type="number" name="quantity1" required class="mem"
                                                        min="0"  value="<?php echo $size1 ?>" >




                                                </div>

                                            </div>
                                            <div class="row">
                                                <!--small-->

                                                <div class="col-lg-3 col-md-3">
                                                    <span class="title"> Mediam<span class="required">*</span> </span>


                                                </div>
                                                <div class="col-lg-9 col-md-9 ">
                                                <input type="text" name="size2" required value="M"  hidden readonly>

                                            <input type="number" name="quantity2" required class="mem" value="<?php echo $size2 ?>"
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

                                        <input type="number" name="quantity3" required class="mem" value="<?php echo $size3 ?>"
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

                                <select name="color1" required class="mem" id="color11">
                                    <option>beige</option>
                                    <option>white</option>
                                    <option>grey</option>
                                    <option selected>black</option>
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

                                <select name="color2" class="mem" id="color22">
                                    <option>beige</option>
                                    <option>white</option>
                                    <option selected>grey</option>
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
                            <input type="number" step="any" name="price" required class="mem" value="<?php echo $price ?>"
                                                        min="0">




                            </div>

                        </div>

                        <div class="row">
                            <!--Discount -->

                            <div class="col-lg-3 col-md-3">
                                <span class="title"> Discount<span class="required">*</span> </span>


                            </div>
                            <div class="col-lg-9 col-md-9 ">
                            <input type="number" step="any" name="discount" required class="mem" value="<?php echo $discount ?>"
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
                            <input type="number" name="points" required class="mem" value="<?php echo $points ?>"
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
                                                        required><?php echo $descriptions ?></textarea>




                            </div>
                        </div>
                        <hr>

                        <div class="row">
                            <!--made in  -->

                            <div class="col-lg-3 col-md-3">
                                <span class="title"> Made in<span class="required">*</span> </span>


                            </div>
                            <div class="col-lg-9 col-md-9 ">
                            <input type="text" name="made" required class="mem" value="<?php echo $made ?>"
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
                            <input type="text" name="code" required class="mem"  value="<?php echo $code ?>"
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
                                <input type="radio" id="man" name="gender" value="male" > |

                                <label for="women">Women</label>

                                <input type="radio" id="women" name="gender" value="female" checked="checked">|

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
                            <input type="text" name="material" required class="mem" value="<?php echo $material ?>"
                                                        placeholder="Carbon">




                            </div>

                        </div> <br> <br> <br> 


                     


                        <div class="row">
                            <!--Model Year:  -->

                            <div class="col-lg-3 col-md-3">
                                <span class="title">Model/Year<span class="required">*</span>
                                </span>


                            </div>
                            <div class="col-lg-9 col-md-9 "> 
                            <input type="number" name="model" required class="mem"   value="<?php echo $model ?>"
                                                        placeholder="2022" min="2000">




                            </div>

                        </div> <br>

                        <div class="row">
                            <!--Weight :  -->

                            <div class="col-lg-3 col-md-3">
                                <span class="title">Weight<span class="required">*</span> </span>


                            </div>
                            <div class="col-lg-9 col-md-9 ">
                            <input type="number" name="weightt" required class="mem" value="<?php echo $weightt ?>"
                                                        placeholder="8400g" min="0">


                        
                                  <!-- hidden inputs  -->
                                  <input type="text" name="categoryName" required hidden readonly value="<?php echo $categoryName ?>">
                                                <input type="text" name="activity" required   hidden readonly value="<?php echo $activity ?>" >
                                                <input type="text" name="chain" required   hidden readonly value="<?php echo $chain ?>">
                                                <input type="text" name="sys" required  hidden readonly value="<?php echo $sys ?>">
                                              
                                                

                                                 <!-- hidden inputs  -->




                            </div>

                        </div> <br> <br> <br> 
                        <hr>


                    </div>

                </div>



            </div>


            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6   " style="border: 1px solid gray;">


                    <div class="row">
                        <!--image  :  -->

                        <div class="col-lg-3 col-md-3">
                            <p><input type="file" accept="image/*" name="image" id="file" value="productsImages/<?php echo $product_id; ?>.<?php echo $ext; ?>"
                                    onchange="loadFile(event)" style="display: none;"></p>
                            <p><label id="btnImage" class="title" for="file" style="cursor: pointer;">Upload/Image<span
                                        class="required">*</span></label></p>

                            <!-- probleme here cause the value not resp we can edit in java script  -->


                        </div>
                        <div class="col-lg-9 col-md-9 "> <br>
                            <p style="margin-left: 20px;border: 1px dotted gray; width: 265px; height: 265px;">
                                <img id="output" width="260px" src="productsImages/<?php echo $product_id; ?>.<?php echo $ext; ?>" />
                            </p>




                        </div>

                    </div> <br>















                </div>

                <div class="col-sm-12 col-md-6 col-lg-6  sub ">

                    <input type="submit" class="button button1" value="Edit Product">







                </div>




            </div>

        </form>







    </div>











</body>

<script>
    let loadFile = function (event) { // for the bike image 
        let image = document.getElementById('output');
        image.src = URL.createObjectURL(event.target.files[0]);
    };




</script>
<!-- <script>document.edit.submit();</script> -->
<script src="javascript/productTools.js"></script>
<script src="sweetalert.min.js"></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<script type="text/javascript">
   document.getElementById("brand").value = "<?php echo $brandName ?>";
   document.getElementById("color11").value = "<?php echo $color1 ?>";
   document.getElementById("color22").value = "<?php echo $color2 ?>";
    </script>




<?php 




if (isset($_GET['succ']) ) {

    echo '<script> swal({
        title: "DONE!",
        text: "The data has been entered successfully",
        icon: "success",
        button: "continue",
      }).then((value) => {
        window.location.href = `searchEdit.html` ;
        
      
      
      });
    </script>';
   

       
   }



?>


</html>