<?php
require_once("header.php");

// echo "<pre>";
// print_r($_REQUEST); 
// echo "</pre>";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://bootswatch.com/_vendor/bootstrap/dist/css/bootstrap.css">
    <title>Products</title>
    <style>
        .card p {
            font-size: 13px;
            width: 95%;
        }
    </style>
</head>

<body>

    <div class="row mx-auto">
        <div class="col-3">
            <div class="card bg-light my-3 border-0">
                <div class="card-body">
                    <div class="product">
                        <img class="w-100 my-3" src="images/Acer-Aspire-3.jpg" alt="IMG">
                    </div>
                    <p class="card-text">Acer Aspire 3 Intel Core i5 12th Generation Laptop (Windows 11 Home/
                        16GB/512GB SSD/MS Office)...</p>
                    <div class="price-btn">
                        <form action="cart.php" method="post">
                            <div class="row">
                                <div class="col-5 ms-3">
                                    <h4>&#8377;42,990</h4>
                                </div>
                                <div class="col-4">
                                    <input type="hidden" name="pro-img" value="images/Acer-Aspire-3.jpg">
                                    <input type="hidden" name="pro-data"
                                        value="Acer Aspire 3 Intel Core i5 12th Generation Laptop (Windows 11 Home/ 16GB/512GB SSD/MS Office)...">
                                    <input type="hidden" name="pro-price" value="42,990">

                                    <input type="submit" name="addtocart" value="Add to Cart"
                                        class="btn btn-warning btn-sm fw-semibold" id="btn">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card bg-light my-3 border-0">
                <div class="card-body">
                    <div class="product">
                        <img class="w-100 my-3" src="images/Acer-Aspire-Lite.jpg" alt="">
                    </div>
                    <p class="card-text">Acer Aspire 5 Gaming Laptop 13th Gen Intel Core i5 (Windows 11 Home/16GB/ 512GB
                        SSD/NVIDIA GeForce RTX 2050)...</p>
                    <div class="price-btn">
                        <form action="cart.php" method="post">
                            <div class="row">
                                <div class="col-5 ms-3">
                                    <h4>&#8377;64,999</h4>
                                </div>
                                <div class="col-4">
                                    <input type="hidden" name="pro-img" value="images/Acer-Aspire-Lite.jpg">
                                    <input type="hidden" name="pro-data"
                                        value="Acer Aspire 5 Gaming Laptop 13th Gen Intel Core i5 (Windows 11 Home/16GB/ 512GB
                        SSD/NVIDIA GeForce RTX 2050)...">
                                    <input type="hidden" name="pro-price" value="64,999">

                                    <input type="submit" name="addtocart" value="Add to Cart"
                                        class="btn btn-warning btn-sm fw-semibold" id="btn">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card bg-light my-3 border-0">
                <div class="card-body">
                    <div class="product">
                        <img class="w-100 my-3" src="images/Acer-Nitro-laptop.jpg" alt="">
                    </div>
                    <p class="card-text">Acer Nitro V Gaming Laptop 13th Gen Intel Core i5 Graphics 6GB (Windows 11
                        Home/16GB/512GB SSD)...</p>
                    <div class="price-btn">
                        <form action="cart.php" method="post">
                            <div class="row">
                                <div class="col-5 ms-3">
                                    <h4>&#8377;72,999</h4>
                                </div>
                                <div class="col-4">
                                    <input type="hidden" name="pro-img" value="images/Acer-Nitro-laptop.jpg">
                                    <input type="hidden" name="pro-data"
                                        value="Acer Nitro V Gaming Laptop 13th Gen Intel Core i5 Graphics 6GB (Windows 11 Home/16GB/512GB SSD)...">
                                    <input type="hidden" name="pro-price" value="72,999">

                                    <input type="submit" name="addtocart" value="Add to Cart"
                                        class="btn btn-warning btn-sm fw-semibold" id="btn">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card bg-light my-3 border-0">
                <div class="card-body">
                    <div class="product">
                        <img class="w-100 my-3" src="images/Acer Aspire 5.jpg" alt="">
                    </div>
                    <p class="card-text">Acer Aspire 5 Gaming Laptop 13th Gen Intel Core i5 (Windows 11 Home/16GB/ 512GB
                        SSD/4GB Graphics)...</p>
                    <div class="price-btn">
                        <form action="cart.php" method="post">
                            <div class="row">
                                <div class="col-5 ms-3">
                                    <h4>&#8377;51,990</h4>
                                </div>
                                <div class="col-4">
                                    <input type="hidden" name="pro-img" value="images/Acer Aspire 5.jpg">
                                    <input type="hidden" name="pro-data"
                                        value="Acer Aspire 5 Gaming Laptop 13th Gen Intel Core i5 (Windows 11 Home/16GB/ 512GB SSD/4GB Graphics)...">
                                    <input type="hidden" name="pro-price" value="51,990">

                                    <input type="submit" name="addtocart" value="Add to Cart"
                                        class="btn btn-warning btn-sm fw-semibold" id="btn">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>