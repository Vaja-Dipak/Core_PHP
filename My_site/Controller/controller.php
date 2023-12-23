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
                    $countrys = $this->select('country');
                    $states = $this->select('state');
                    $citys = $this->select('city');
                    include_once("Views/registration.php");
                    if (isset($_POST["submit"])) {
                        // echo "<pre>";
                        // print_r($_REQUEST);
                        // print_r($_FILES['profile_pic']);
                        // print_r(pathinfo($_FILES['profile_pic']["name"]));
                        // print_r($_FILES['profile_pic']['error']);
                        // echo "</pre>";

                        $allowed_image_extension = array("png", "PNG", "jpg", "JPG", "jpeg", "JPEG", "webp");
                        if ($_FILES['profile_pic']['error'] == 0) {
                            $file_extension = pathinfo($_FILES["profile_pic"]["name"], PATHINFO_EXTENSION);
                            if (!file_exists($_FILES['profile_pic']['tmp_name'])) {
                                $response = array(
                                    "type" => "error",
                                    "message" => "Choose image file to upload."
                                );
                            } else if (!in_array($file_extension, $allowed_image_extension)) {
                                $response = array(
                                    "type" => "error",
                                    "message" => "Upload valid images. Only allowed JPG, JPEG, PNG and webp Images."
                                );
                            } else if (($_FILES["profile_pic"]["size"] > 2000000)) {
                                $response = array(
                                    "type" => "error",
                                    "message" => "Image size allowed smaller then 2MB"
                                );
                            } else {
                                $target = "assets/uploads/" . basename($_FILES["profile_pic"]["name"]);
                                if (move_uploaded_file($_FILES["profile_pic"]["tmp_name"], $target)) {
                                    $response = array(
                                        "type" => "success",
                                        "message" => "Image uploaded successfully..",
                                        "name" => $_FILES["profile_pic"]["name"]
                                    );
                                    $imagename = $_FILES["profile_pic"]["name"];
                                } else {
                                    $response = array(
                                        "type" => "error",
                                        "message" => "Problem in image uploading..!"
                                    );
                                    $imagename = "---";
                                }
                            }
                        }

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
                            "profile_pic" => $imagename,
                            "status" => 0);

                        $response = $this->insert("user_data", $data);

                        if($response['code']==1){
                            echo "<script>alert('Registration Succesfully..')</script>";
                            header("location:login");
                        }else{
                            echo "<script>alert('Please try again later...')</script>";
                        }
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
                    $countrys = $this->select('country');
                    $states = $this->select('state');
                    $citys = $this->select('city');
                    $updtsel = $this->select('user_data', array("id" => $_REQUEST['id']));
                    // echo "<pre>";
                    // print_r($updtsel['data']);
                    // echo "</pre>";
                    include_once("Views/Admin/header.php");
                    include_once("Views/Admin/updateuser.php");
                    include_once("Views/Admin/footer.php");

                    if (isset($_POST['submit'])) {
                        $data = array("username" => $_POST['username'],
                            "email" => $_POST['email'],
                            "mobile" => $_POST['mobile'],
                            "birth" => $_POST['birth'],
                            "gender" => $_POST['gender'],
                            "address" => $_POST['address'],
                            "country" => $_POST['country'],
                            "state" => $_POST['state'],
                            "city" => $_POST['city'],
                            "password" => $_POST['password'], );

                        $update = $this->update('user_data', $data, $_POST['id']);

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
                    break;
                case '/carousels':
                    include_once("Views/Admin/header.php");
                    include_once("Views/Admin/carousels.php");
                    include_once("Views/Admin/footer.php");
                    break;
                case '/card':
                    include_once("Views/Admin/header.php");
                    include_once("Views/Admin/card.php");
                    include_once("Views/Admin/footer.php");
                    break;
                case '/people':
                    include_once("Views/Admin/header.php");
                    include_once("Views/Admin/people.php");
                    include_once("Views/Admin/footer.php");
                    break;
                case '/pricing':
                    include_once("Views/Admin/header.php");
                    include_once("Views/Admin/pricing.php");
                    include_once("Views/Admin/footer.php");
                    break;
                case '/blocks':
                    include_once("Views/Admin/header.php");
                    include_once("Views/Admin/blocks.php");
                    include_once("Views/Admin/footer.php");
                    break;
                case '/forms':
                    include_once("Views/Admin/header.php");
                    include_once("Views/Admin/forms.php");
                    include_once("Views/Admin/footer.php");
                    break;

            }
        } else {
            header("location:home");
        }
        ob_flush();
    }
}

$controllerobj = new Controller;

?>