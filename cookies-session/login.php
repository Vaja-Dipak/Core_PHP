<?php

if (isset($_POST["login"])) {

    // if (isset($_COOKIE["username"])) {
    //     if ($_POST["name"] == $_COOKIE['username'] && $_POST["pass"] == $_COOKIE['password']) {

    //         echo "valid Username or Password..!!";
    //         header("location:product.php");
    //     } else {
    //         echo "Invalid Username or Password..!!";
    //     }
    // } else {
    //     echo "Not Registered User..!!";
    // }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://bootswatch.com/_vendor/bootstrap/dist/css/bootstrap.css">
    <title>Login</title>
    <style>
        h1 {
            font-family: sans-serif;
            font-weight: bold;
            text-align: center;
            margin: 40px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-4 offset-4 mt-5">

                <div class="card">
                    <div class="card-header">Login</div>
                    <div class="card-body">
                        <form method="post">

                            <div class="row">
                                <div class="col">
                                    <input type="text" placeholder="Enter User Name" class="form-control" name="name"
                                        id="username">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col">
                                    <input type="password" placeholder="Enter Password" class="form-control" name="pass"
                                        id="password">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col text-center">
                                    <input type="submit" class="btn btn-primary" name="login" value="Login" id="">
                                    <input type="reset" class="btn btn-danger" name="" id="">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col text-center">
                                    <a href="registration.php">Click here to create new account</a>
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