<?php require_once("header.php"); 
if (isset($_POST["btn-login"])) {
    // echo "<pre>";
    // print_r($_COOKIE);
    // print_r($_REQUEST);
    // echo "</pre>";
    // exit;
    if (isset($_COOKIE['username'])) {
        if($_POST["username"] == $_COOKIE['username'] && $_COOKIE['password'] == $_POST["password"]) {
            echo "Login success";
            $_SESSION['UserName'] = $_POST['username'];
            $_SESSION['UserData'] = array("username"=>$_POST['username'],"password"=>$_POST['password']) ;
            header("location:userdashboard.php");
        } else {
            echo "invalid user";
        }
    }else{
        echo "not registered yet";
    }
}
?>
<div class="container">
    <div class="row">
        <div class="col-4 offset-4 mt-5">
            
            <div class="card">
                <div class="card-header">Login</div>
                <div class="card-body">
                    <form method="post">

                        <div class="row">
                            <div class="col">
                                <input type="text" placeholder="Enter User Name" class="form-control" name="username" id="username">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <input type="password" placeholder="Enter Password" class="form-control" name="password" id="password">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col text-center">
                                <input type="submit" class="btn btn-primary" name="btn-login" id="">
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
