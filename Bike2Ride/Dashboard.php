<!DOCTYPE html>
<html lang="en">
<?php

session_start();
if(!isset($_SESSION['layer'])|| $_SESSION['layer']==false ){// actuel user .. dhhhar
    
    header("location:user.php") ;
    die();
}

require('config.php');
$sql=" select *  from users where userId=".$_SESSION['userId'];
$result=mysqli_query($con,$sql) ;
require('resultNO.php');
$row=mysqli_fetch_array($result) ;
$firstName = $row['firstName'];
$lastName = $row['lastName'];
$layer = $row['layer'];

if($row['layer']==1) {
    $hisLayer = "Super Admin"; } // super admin

elseif($row['layer']==2) {
    $hisLayer = "Admin"; } //  admin

 elseif($row['layer']==3) {
    $hisLayer = "Sales Man";}  // sales man 

     elseif($row['layer']==4) {
        $hisLayer = "Delivery Man" ;}  // dilevery 


else{
      
      header('location:user3.php') ;} 

?>


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1">
    <title><?php echo $hisLayer;?> Dashboard </title>
    

    <link rel="stylesheet" href="css/Dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>

<body onload="layer(<?php echo $layer;?>)"> <!--style="width: 100%;"-->

    <input type="checkbox"  id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2> <a href="home.php" style="color: white;"><span class="fa-solid fa-bicycle" style="color:rgb(46, 25, 46);" ></span> <span>  BIKE<span style="color: rgb(179, 10, 10) ; font-weight: bold; font-size: larger; padding: 0;">2</span>Ride </span> </a> </h2> 
        </div>
        <div class="sidebar-menu" id="myActiveDiv">
            <ul>
                <li><button class="btn active" onclick="getinnerText('dashHome.html')">
                        <span class="fa-solid fa-wrench"></span>
                        <span> Dashboard</span></button>
                </li>
               
                <li id="Managerial"><button class="btn" id="nin" onclick="getinnerText('managerial1.php')">
                        <span class="fa-solid fa-people-roof"></span>
                        <span> Managerial</span></button> 
                </li>
                <li id="ProductTools"><button class="btn" id="nin" onclick="getinnerText('ProductTools.php')">
                    <span class="fa-solid fa-screwdriver-wrench"></span> 
                    <span>Product Tools</span></button>
            </li>
                <li id="Customers"><button class="btn" id="nin" onclick="getinnerText('costemer.html')">
                        <span class="fa-solid fa-users"></span>
                        <span> Customers</span></button>
                </li>
                <li id="Reviews"><button class="btn" id="nin" onclick="getinnerText('DReviewsUser.html')">
                    <span class="fa-solid fa-comments"></span>
                    <span> Reviews</span></button> 
            </li>
                <li id="Orders"><button class="btn" id="nin" onclick="getinnerText('deliveryAdmin.html')">
                        <span class="fa-solid fa-truck-fast"></span> 
                        <span> Orders</span></button>
                </li>
                <li id="Products"><button class="btn" id="nin" onclick="getinnerText('dashbaordHProducts.php')">
                        <span class="fa-brands fa-product-hunt"></span> 
                        <span>Products</span></button>
                </li>
                <li id="Digital"><button class="btn" id="nin" onclick="getinnerText('Digital-info.html')">
                        <span class="fa-brands fa-digital-ocean"></span> 
                        <span>Digital Information</span></button>
                </li>
            
            </ul>
            
        </div>
    </div>

    <div class="main-content">
        <header>

            <h2>
                <label for="nav-toggle">
                    <span class="fa-solid fa-bars"> </span>
                </label>

                Dashboard <br>
                <!-- <span class="fa-solid fa-house-flag"></span>
                        <span>Our Web Page</span></button> -->
            </h2>

            <div class="search-wrapper">
                <span class="fa-solid fa-magnifying-glass"></span>
                <input type="search" placeholder="search here ..">

            </div>


            <div class="user-wrapper">
                <!-- <img src="photo/bbbb.jpg" alt width="40px" height="40px" /> -->
                <div>
                    <h4><?php echo $firstName." ". $lastName;?>   </h4>
                    <small><?php echo $hisLayer;?> </small> <br> 
                    <small> <a href="logout.php" > Logout </a></small>
                </div>

            </div>

        </header>


        <main>


            <div class="cards">

                <div class="card-single">
                    <div>
                        <h1>543</h1>
                        <span>Customers</span>
                    </div>
                    <div>
                        <span class="fa-solid fa-users"></span>
                    </div>

                </div>



                <div class="card-single">
                    <div>
                        <h1>742</h1>
                        <span>Product</span>
                    </div>
                    <div>
                        <span class="fa-brands fa-product-hunt"></span>
                    </div>

                </div>


                <div class="card-single">
                    <div>
                        <h1>541</h1>
                        <span>Orders</span>
                    </div>
                    <div>
                        <span class="fa-solid fa-truck"></span>
                    </div>


                </div>



                <div class="card-single">
                    
                
                    <div>
                      
                    
                        <h1>7826</h1> 
                        <span>T-R/Month </span>
                      
                    </div>
                   
                    <div>
                        <span class="fa-solid fa-euro-sign"></span>
                    </div>
                    

                </div>











            </div>

            <!-- //////////////////////////////////////////end of button fo2  -->
            <!-- start of jadwal  -->

            
                 
            <div class="recent-grid" style="margin: auto; width: 97%; " id="display"  >

                
                <div style="height: 100%;" > 
                    <object type="text/html" data="dashHome.html" width="100%" height="100%"  style="overflow:auto;border:none"> 
                    </object>
                 </div> 

            </div>


           

           




            
    </div>



    









    </main>
    </div>

</body>
<script src="javascript/Dashboard.js"></script>

<script>

function layer(layer) {
  if (layer==2) {
    document.getElementById("Managerial").style.display = "none";
  }
 if(layer==3){
    document.getElementById("Managerial").style.display = "none";
    document.getElementById("ProductTools").style.display = "none";
    document.getElementById("Customers").style.display = "none";
    document.getElementById("Reviews").style.display = "none";
    document.getElementById("Orders").style.display = "none";

  }
  if(layer==4){
    document.getElementById("Managerial").style.display = "none";
    document.getElementById("ProductTools").style.display = "none";
    document.getElementById("Customers").style.display = "none";
    document.getElementById("Reviews").style.display = "none";
    document.getElementById("Digital").style.display = "none";
    document.getElementById("Products").style.display = "none";

  }
}



</script>

</html>