<?php
session_start();
require_once("Model/model.php");
class Controller extends Model
{

    public $assetsurl = "http://localhost/My_site/assets/";
    function __construct()
    {
        ob_start();
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
                    if (isset($_POST["submit"])) {
                        $data = array("username" => $_POST['username'],
                            "email" => $_POST['email'],
                            "mobile" => $_POST['mobile'],
                            "birth" => $_POST['birth'],
                            "gender" => $_POST['gender'],
                            "address" => $_POST['address'],
                            "country" => $_POST['country'],
                            "state" => $_POST['state'],
                            "city" => $_POST['city'],
                            "password" => $_POST['pass'],
                            "profile_pic" => "profile_pic.jpg",
                            "status" => 0);

                        $this->insert("user_data", $data);

                        echo "<script>alert('Registration Succesfully.')</script>";
                        header("location:login");
                    }
                    break;
                case '/login':
                    include_once("Views/login.php");
                    if (isset($_POST["login"])) {
                        $res = $this->login($_POST['username'], $_POST['pass']);
                        if ($res['code'] == 1) {
                            // echo"<pre>";
                            // print_r(array_column($res,"password"));
                            // print_r($res);
                            // print_r($res['data']->role_id);
                            // echo"</pre>";

                            $_SESSION['UserData'] = $res['data'];
                            if ($res['data']->role_id == 1) {
                                header("location:dashboard");
                            } else {
                                header("location:home");
                            }
                        } else {
                            echo "<script>alert('Please Enter Correct Username and Password...!')</script>";
                        }
                    }
                    break;
                case '/dashboard':
                    $users = $this->select('user_data');
                    include_once("Views/Admin/header.php");
                    include_once("Views/Admin/main_page.php");
                    include_once("Views/Admin/footer.php");
                    break;
                case '/updateuser':
                    $updtsel = $this->select('user_data', array("id" => $_REQUEST['id']));
                    // echo "<pre>";
                    // print_r($updtsel['data']);
                    // echo "</pre>";
                    include_once("Views/Admin/header.php");
                    include_once("Views/Admin/updateuser.php");
                    include_once("Views/Admin/footer.php");

                    if(isset($_POST['submit'])){
                        $data=array("username" => $_POST['username'],
                        "email" => $_POST['email'],
                        "mobile" => $_POST['mobile'],
                        "birth" => $_POST['birth'],
                        "gender" => $_POST['gender'],
                        "address" => $_POST['address'],
                        "country" => $_POST['country'],
                        "state" => $_POST['state'],
                        "city" => $_POST['city'],
                        "password" => $_POST['password'],);
                        
                        $update=$this->update('user_data',$data,$_POST['id']);

                        echo "<script>alert('Data Updated Succesfully..')</script>";
                        header("location:dashboard");
                    }

                    break;
                case '/deleteuser':
                    // echo "<pre>";
                    // print_r($_REQUEST);
                    // echo "</pre>";
                    $deleteuser = $this->delete('user_data', array("id" => $_REQUEST['id']));
                    echo "<pre>";
                    print_r($deleteuser);
                    echo "</pre>";
                    if ($deleteuser['code'] == 1) {
                        echo '<script>alert("User are Deleted Successfully..")</script>';
                        header("location:dashboard");
                    } else {
                        echo '<script>alert("Data are not Deleted Please try after some time..")</script>';
                        header("location:dashboard");
                    }
            }
        } else {
            header("location:home");
        }
        ob_flush();
    }
}

$controllerobj = new Controller;

?>