<?php

session_start();
if(!isset($_SESSION['layer'])|| $_SESSION['layer']==false ){// actuel user .. dhhhar
    
    header("location:user.php") ;
    die();
}
?>


<?php

include "config.php";

$return_arr = array();

$query = "SELECT p.product_id, p.Category, p.title, p.brandName, p.color1, p.color2,
 p.price, p.discount, p.ext, SUM(s.quantity) AS total FROM product p
 LEFT JOIN sizestock s ON s.product_id=p.product_id GROUP BY p.product_id ORDER BY p.product_id ;";

$result = mysqli_query($con, $query);

while ($row = mysqli_fetch_array($result)) {

    $product_id = $row['product_id'];


    $Category = $row['Category'];
    $title = $row['title'];
    $brandName = $row['brandName'];

    $color1 = $row['color1'];

    $color2 = $row['color2'];
    $price = $row['price'];
    $discount = $row['discount'];
    $ext = $row['ext'];


    $priceAfter = ($price - ($price * $discount / 100));




    $total = $row['total'];




    $return_arr[] = array(
        "product_id" => $product_id,
        "Category" => $Category,
        "title" => $title,
        "brandName" => $brandName,
        "color1" => $color1,
        "color2" => $color2,
        "price" => $price,
        "discount" => $discount,
        "priceAfter" => $priceAfter,
        "total" => $total,
        "ext" => $ext
    );
}

// Encoding array in JSON format
echo json_encode($return_arr);


// var product_id = response[i].product_id;
// var Category = response[i].Category;
// var title = response[i].title;
// var brandName = response[i].brandName;
// var color1 = response[i].color1;
// var color2 = response[i].color2;
// var price = response[i].price;
// var discount = response[i].discount;
// var priceAfter = response[i].priceAfter;
// var total = response[i].total;
