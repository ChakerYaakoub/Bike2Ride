<?php
$conn = mysqli_connect("localhost", "root", "","bike2ride3");
header("Content-Type: JSON");
// if($conn){
//     echo'good';
// }
$query = "SELECT * FROM product" ;
$result= mysqli_query($conn, $query);
// $data=mysqli_fetch_all($result);
$data=mysqli_fetch_all($result, MYSQLI_ASSOC);

echo json_encode($data);





