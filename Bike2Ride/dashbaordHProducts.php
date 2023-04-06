<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- css link-->
    <!-- <link rel="stylesheet" href="css/default.css"> -->

    <link rel="stylesheet" href="css/productDashBoardHadi.css">

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- BootstarpLINK -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">




    <title>ProductDashBoard</title>
</head>

<body>

    <div class="container mt-5">
        <div class="row">
            <h3>Product Chart</h3>
            <p style="padding-left: 10px;"></p>
            <div class="col-sm-12 col-md-10">
                <canvas id="bar-chart" width="700px" height="300px"></canvas>
                <!-- <canvas id="line-chart" width="400" height="400"></canvas> -->
            </div>



            <h3> this table presents each product property</h3>
            <p style="padding-left: 10px;"></p>
            <div class="col-sm-12 col-md-10">

                <div class="table-container">


                    <div class="table-horizontal-container">
                        <table class="unfixed-table">
                            <thead>
                                <tr>
                                    <th class="DashthSizeTable"><i class="fa-solid fa-image"></i></th>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <!-- <th>Stock </th> -->
                                    <th>Price</th>
                                    <!-- <th>Categories</th> -->
                                    <th>
                                        <div class="custom-select" style="width:200px;">
                                            <select>
                                                <option value="0">Categories</option>
                                                <option value="1">Bike</option>
                                                <option value="2">Helmit</option>
                                                <option value="3">Gloves</option>
                                                <option value="4">Bottles</option>

                                            </select>
                                        </div>
                                    </th>
                                    <!-- <th>Brand</th> -->
                                    <th>
                                        <div class="custom-select" style="width:200px;">
                                            <select>
                                                <option value="0">BRAND</option>
                                                <option value="1">Cannondale</option>
                                                <option value="2">Asics</option>
                                                <option value="3">Campagnolo</option>
                                                <option value="4">Cube</option>
                                                <option value="1">Giro</option>
                                                <option value="2">Scott</option>
                                                <option value="3">Endura</option>
                                                <option value="4">GoreWear</option>

                                            </select>
                                        </div>
                                    </th>
                                    <th>Color</th>
                                </tr>
                            </thead>
                            <tbody >
                                <tr id="tablebodyy"></tr>
                               
                            </tbody>

                            <!-- <tfoot>
                                <tr>
                                    <td>Footer</td>
                                    <td>Footer</td>
                                    <td>Footer</td>
                                    <td>Footer</td>
                                    <td>Footer</td>
                                    <td>Footer</td>
                                    <th>Footer</th>
                                    <th>Footer</th>
                                </tr>
                            </tfoot> -->
                        </table>
                    </div>
                </div>
                </object>
                </article>
                



            </div>







        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.0/Chart.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="javascript/hadiDashboard.js"></script>
    <!-- <script src="javascript/jquery.js"></script> -->
    <!-- <script src="js/tableproduct.js"></script> -->
    


</body>



</html>