<?php
$con=new mysqli("localhost","root","","practicedb");
    

if (isset($_POST["createAcc"])) {
    setcookie("username",$_POST["name"], time() + 3600);
    setcookie("password",$_POST["pass"], time() + 3600);

    $name=$_POST["name"];
    $mail=$_POST["email"];
    $mobile=$_POST["mobile"];
    $pass=$_POST["pass"];

    $sql="INSERT INTO `user_data`(`name`, `email`, `mobile`, `pass`) VALUES ('$name','$mail','$mobile','$pass')";
    $res=mysqli_query($con,$sql);

    if($res==1){
        echo '<script>alert("Registration completed succesfully..!!")</script>'; 
        header("location:login.php");
    }
    else{
        $msg=mysqli_error($con);
        echo "<script>alert($msg)</script>"; 
    }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <link rel="stylesheet" href="https://bootswatch.com/_vendor/bootstrap/dist/css/bootstrap.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <title>Registration</title>
</head>

<body>
    <section>
        <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">SHOPPING</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01"
                    aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-5 offset-4 mt-5">
                    <div class="card">
                        <h4 class="card-title mt-3 text-center">Create Account</h4>
                        <p class="text-center">Get started with your free account</p>
                        <div class="card-body">
                            <form method="post">
                                <div class="form-group input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                    </div>
                                    <input type="text" name="name" class="form-control" placeholder="Full name">
                                </div>
                                <div class="form-group input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                                    </div>
                                    <input type="email" name="email" class="form-control" placeholder="Email address">
                                </div>
                                <div class="form-group input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                                    </div>
                                    <input type="text" name="mobile" class="form-control" placeholder="Phone number">
                                </div>
                                <div class="form-group input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                                    </div>
                                    <input type="password" name="pass" class="form-control"
                                        placeholder="Create password">
                                </div>
                                <div class="form-group input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                                    </div>
                                    <input type="password" name="repass" class="form-control"
                                        placeholder="Repeat password">
                                </div>
                                <div class="form-group">
                                    <button type="submit" name="createAcc" class="btn btn-primary btn-block"> Create
                                        Account </button>
                                </div>
                                <p class="text-center">Have an account? <a href="login.php">Log In</a> </p>
                            </form>
                        </div>
                    </div>
                </div>
                </article>
            </div>

        </div>
    </section>
</body>

</html>