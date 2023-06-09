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
    <title>addBrands </title>
    <link rel="stylesheet" href="css/ProductTools.css">

    <!-- font cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="javascript/productTools.js"></script>
</head>

<body>

    <div class="container-fluid ">
        <h2>Brands Tools :</h2>
        <br>
        <!-- Nav pills -->
        <ul class="nav nav-pills" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-bs-toggle="pill" href="#add"><i class="fa-regular fa-square-plus"></i>
                    Add a new brand</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="pill" href="#edit"> <i class="fa-regular fa-pen-to-square"></i>

                    Edit / Remove brand </a>
            </li>


        </ul>

        <?php
        $brandErr="";
        $brandName="";
        if (isset($_GET['brandErr']) || isset($_GET['brandName'])) {
         $brandErr=$_GET['brandErr'];
         $brandName=$_GET['brandName'];
        
            
        }
        ?>



        <div class="tab-content">
            <div id="add" class="container-fluid tab-pane active" style="padding-left: 0;">

                <div id="gloves" class="container-fluid  "><br>
                    <p> <b> Note: </b> Be sure to enter all brands information</p>
                    <p><span class="required">*</span> required</p><br>
                    <form action="BrandRegister.php" method='POST' enctype='multipart/form-data' >  <!-- id="myform" onsubmit="return submitForm(this);" -->
                      




                        <div class="container-fluid">
                            <div class="row">



                                <div class="col-sm-12 col-md-6 col-lg-6   ">

                                    <div class="row">
                                        <!--brand name : in  -->

                                        <div class="col-lg-3 col-md-3">
                                            <span class="title">BrandName<span class="required">*</span>
                                            </span>


                                        </div>
                                        <div class="col-lg-9 col-md-9 ">
                                            <input type="text" name="brandName" required class="mem" placeholder="willer" value="<?php echo $brandName ;?>">
                                            <p style="color:red; font-size:16px;" > <b> <?php echo $brandErr ;   ?> </b> </p>




                                        </div>

                                    </div>
                                    <br>
                                    <hr>

                                    <div class="row">


                                        <!--description -->

                                        <div class="col-lg-3 col-md-3">
                                            <span class="title">Description<span class="required">*</span>
                                            </span>


                                        </div>
                                        <div class="col-lg-9 col-md-9 ">
                                            <textarea class="mem" rows="6" name="brand_descriptions" required></textarea>


                                        </div>

                                    </div>


                                </div>

                                <div class="col-sm-12 col-md-6 col-lg-6   "
                                    style="border-left: 1px solid rgb(201, 198, 198) ;">

                                    <div class="row">
                                        <!--image  :  -->


                                        <div class="col-lg-3 col-md-3">
                                            <p><input type="file" accept="image/*" name="image" id="fileB"
                                                    onchange="loadFileB (event)" style="display: none;" required>
                                            </p>
                                            <p><label id="btnImage" class="title" for="fileB"
                                                    style="cursor: pointer;">Upload/Image<span
                                                        class="required">*</span></label></p>


                                        </div>
                                        <div class="col-lg-9 col-md-9 "> <br>
                                            <p
                                                style="margin-left: 20px;border: 1px dotted gray; width: 260px; height: 225px;">
                                                <img id="outputB" width="260px" />
                                            </p>




                                        </div>

                                    </div> <br>

                                </div>

                            </div>
                            <hr>

                            <div class="row sub">
                                <p></p>

                                <input type="submit" class="button button1" value="Add Brand" style="width: 40%;">

                            </div>


                        </div>









                    </form>




                </div>


            </div>

            <div id="edit" class="container-fluid tab-pane " style="padding-left: 0;">

                <center>
                   <br><br><br><br> <p>This page is currently not complete</p>
                </center>


            </div>

        </div>

    </div>







</body>

<script>
    let loadFileB = function (event) { // for the gloves image 
        let image = document.getElementById('outputB');
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