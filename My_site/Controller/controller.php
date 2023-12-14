<?php

require_once("Model/model.php");
class Controller extends Model
{

    public $assetsurl = "http://localhost/My_site/assets/";
    function __construct()
    {        
        parent::__construct();
        if (isset($_SERVER['PATH_INFO'])) {
            switch ($_SERVER['PATH_INFO']) {
                case '/':
                case '/home':
                    include_once("Views/header.php");
                    include_once("Views/home.php");
                    include_once("Views/footer.php");
                    break;
                case '/registration':
                    include_once("Views/registration.php");
                    if(isset($_POST["submit"])){

                        $data=array("fname"=>$_POST['fname'],
                        "lname"=>$_POST['lname'],
                        "email"=>$_POST['email'],
                        "mobile"=>$_POST['mobile'],
                        "birth"=>$_POST['birth'],
                        "gender"=>$_POST['gender'],
                        "address"=>$_POST['address'],
                        "country"=>$_POST['country'],
                        "state"=>$_POST['state'],
                        "city"=>$_POST['city'],
                        "pass"=>$_POST['pass'],
                        "profile_pic"=>"profile_pic.jpg",
                        "status"=>0);

                        $this->insert("user_data",$data);
                    }  
                    break;
                case '/login':
                    include_once("Views/login.php");
                    break;
            }
        }
        else{
            header("location:home");
        }
        // echo "controller";
    }
}

$controllerobj = new Controller;

?>