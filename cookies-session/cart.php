<?php
require_once("header.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://bootswatch.com/_vendor/bootstrap/dist/css/bootstrap.css">
  <title>Cart</title>
</head>

<body>
  <h1>Cart</h1>

  <div class="row mx-auto">
    <div class="col-3">
      <div class="card bg-light my-3 border-0">
        <div class="card-body">
          <div class="product">
            <img class="w-100 my-3" src="<?php print_r($_POST["pro-img"]); ?>" alt="IMG">
          </div>
          <p class="card-text"><?php print_r($_POST["pro-data"]); ?></p>
          <div class="price-btn">
            <form action="cart.php" method="post">
              <div class="row">
                <div class="col-5 ms-3">
                  <h4>&#8377;<?php print_r($_POST["pro-price"]); ?></h4>
                </div>
                <div class="col-4">
                  <input type="submit" name="addtocart" value="Order Now" class="btn btn-warning btn-sm fw-semibold"
                    id="btn">
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