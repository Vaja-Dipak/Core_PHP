<?php require_once("header.php"); 

if (isset($_POST["btn-register"])) {
    // echo "regsiterd";
    // setcookie("username", $_POST["username"], time() + 3600*24,"/");
    // setcookie("password", $_POST["password"], time() + 3600*24,"/");
    setcookie("username",$_POST["username"],time()+3600);
    setcookie("password",$_POST["password"],time()+3600);
    header("location:login.php");
}

?>
<div class="container">
    <div class="row">
        <div class="col-4 offset-4 mt-5">
            
            <div class="card">
                <div class="card-header">Registration</div>
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
                                <input type="submit" class="btn btn-primary" name="btn-register" id="">
                                <input type="reset" class="btn btn-danger" name="" id="">
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
