<?php
$conn = mysqli_connect("localhost", "root", "","bike2ride3");
header("Content-Type: JSON");
// if($conn){
//     echo'good';
// }
$queryall = "SELECT COUNT(product_id) AS ALLPRODUCT FROM product" ;
$resultall= mysqli_query($conn, $queryall);
// $data=mysqli_fetch_all($result);
$dataall=mysqli_fetch_all($resultall, MYSQLI_ASSOC);

$querybike = "SELECT COUNT(product_id) AS bikePRODUCT FROM product where Category ='bike'" ;
$resultbike= mysqli_query($conn, $querybike);
// $data=mysqli_fetch_bike($result);
$databike=mysqli_fetch_all($resultbike, MYSQLI_ASSOC);


$queryAcc = "SELECT COUNT(product_id) AS AccPRODUCT FROM product where Category !='bike'" ;
$resultAcc= mysqli_query($conn, $queryAcc);
// $data=mysqli_fetch_bike($result);
$dataAcc=mysqli_fetch_all($resultAcc, MYSQLI_ASSOC);



$queryHel = "SELECT COUNT(product_id) AS HelPRODUCT FROM product where Category ='helmet'" ;
$resultHel= mysqli_query($conn, $queryHel);
// $data=mysqli_fetch_bike($result);
$dataHel=mysqli_fetch_all($resultHel, MYSQLI_ASSOC);



$queryGlov = "SELECT COUNT(product_id) AS GlovPRODUCT FROM product where Category ='gloves'" ;
$resultGlov= mysqli_query($conn, $queryGlov);
// $data=mysqli_fetch_bike($result);
$dataGlov=mysqli_fetch_all($resultGlov, MYSQLI_ASSOC);

$queryBot = "SELECT COUNT(product_id) AS BotPRODUCT FROM product where Category ='bottle'" ;
$resultBot= mysqli_query($conn, $queryBot);
// $data=mysqli_fetch_bike($result);
$dataBot=mysqli_fetch_all($resultBot, MYSQLI_ASSOC);


// $data=[$dataall,$databike,$dataAcc,$dataHel,$dataGlov,$dataBot];


// echo json_encode($data);
echo json_encode(['result1'=>$dataall,'result2'=>$databike,'result3'=>$dataAcc,'result4'=>$dataHel,'result5'=>$dataGlov,'result6'=>$dataBot]);



// echo json_encode($dataall);
// echo json_encode($databike);
// echo json_encode($dataAcc);
// echo json_encode($dataHel);
// echo json_encode($dataGlov);
// echo json_encode($dataBot);