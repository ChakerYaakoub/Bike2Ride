<?php

session_start();
if (!isset($_SESSION['layer'])) {

    header("location:user.php");
    die();
}
?>


<?php

$user = $_SESSION['userId'];

include "config.php";

$return_arr = array();

$query = "SELECT c.userId , c.cart_quantity ,c.product_size ,
u.userPoint,u.addressU ,
p.product_id, p.Category, p.title, p.brandName, p.color1, p.color2, p.price, p.discount, p.points, p.ext ,
s.quantity AS maxQuantity
FROM cart c , product p ,sizestock s, users u WHERE 
c.userId=$user 
and c.product_id=p.product_id
and c.userId=u.userId

and s.product_id=p.product_id 
and c.product_size=s.size order by c.cart_date;";


// SELECT c.userId , c.cart_quantity ,c.product_size ,
// p.product_id, p.Category, p.title, p.brandName, p.color1, p.color2, p.price, p.discount, p.ext ,
// s.quantity AS maxQuantity
// FROM cart c , product p ,sizestock s WHERE 
// c.userId=$user and c.product_id=p.product_id
// and s.product_id=p.product_id 
// and c.product_size=s.size order by c.cart_date;








$result = mysqli_query($con, $query);


while ($row = mysqli_fetch_array($result)) {

    
    $userId = $row['userId'];
    $cart_quantity = $row['cart_quantity'];
    $product_size = $row['product_size'];

    $userPoint = $row['userPoint'];
    $addressU = $row['addressU'];

    $product_id = $row['product_id'];
    $Category = $row['Category'];
    $title = $row['title'];
    $brandName = $row['brandName']; 
    $color1 = $row['color1'];
    $color2 = $row['color2'];
    $price = $row['price'];
    $discount = $row['discount'];
    $points = $row['points'];

    $ext = $row['ext'];

    $maxQuantity = $row['maxQuantity'];


    $priceAfter = ($price - ($price * $discount / 100));




  




    $return_arr[] = array(
       

        "userId" => $userId,
        "cart_quantity" => $cart_quantity,
        "product_size" => $product_size,

        "maxQuantity" => $maxQuantity,

        "userPoint" => $userPoint,
        "addressU" => $addressU,


        "points" => $points,



        "product_id" => $product_id,
        "Category" => $Category,
        "title" => $title,
        "brandName" => $brandName,
        "color1" => $color1,
        "color2" => $color2,
        "price" => $price,
        "discount" => $discount,
        "priceAfter" => $priceAfter,
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
