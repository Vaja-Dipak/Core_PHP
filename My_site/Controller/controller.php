
<?php
session_start();
date_default_timezone_set('Asia/Kolkata');

require_once("Model/model.php");
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';


class Controller extends Model
{
    public $assetsurl = "http://localhost/My_site/assets/";
    public $mail = "";
    function __construct()
    {
        //Create an instance; passing `true` enables exceptions
        $this->mail = new PHPMailer(true);
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

                // ---------------API section start---------------

                case '/getcountrys':
                    $data = $this->select('countries');
                    echo json_encode($data['data']);
                    break;
                case '/getstatesbycountry':
                    $data = $this->select('states', array("country_id" => $_REQUEST["countryid"]));
                    echo json_encode($data['data']);
                    break;
                case '/getcitysbystate':
                    $data = $this->select('cities', array("state_id" => $_REQUEST["stateid"]));
                    echo json_encode($data['data']);
                    break;
                case '/ress':
                    $formdata =json_decode(file_get_contents('php://input'),true);
                    $data = $this->insert("user_data", $formdata);
                    echo json_encode($data);
                    break;

                // ---------------API section end---------------

                case '/registration':
                    include_once("Views/registration.php");
                    // if (isset($_POST["submit"])) {
                    //     echo "<pre>";
                    //     print_r($_REQUEST);
                    //     // print_r($_FILES['profile_pic']);
                    //     // print_r(pathinfo($_FILES['profile_pic']["name"]));
                    //     // print_r($_FILES['profile_pic']['error']);
                    //     echo "</pre>";

                    //     if ($_FILES['profile_pic']['error'] == 0) {
                    //         $this->profileupld($_FILES);
                    //     } else {
                    //         $imagename = "Empty";
                    //     }


                    //     $data = array(
                    //         "username" => $_POST['username'],
                    //         "email" => $_POST['email'],
                    //         "mobile" => $_POST['mobile'],
                    //         "birth" => $_POST['birth'],
                    //         "gender" => $_POST['gender'],
                    //         "address" => $_POST['address'],
                    //         "country" => $_POST['country'],
                    //         "state" => $_POST['state'],
                    //         "city" => $_POST['city'],
                    //         "password" => $_POST['pass'],
                    //         "profile_pic" => $imagename,
                    //         "status" => 0
                    //     );

                    //     $res = $this->insert("user_data", $data);

                    //     if ($res['code'] == 1) {
                    //         echo "<script>alert('Registration Succesfully..')</script>";
                    //         header("location:login");
                    //     } else {
                    //         echo "<script>alert('Please try again later...')</script>";
                    //     }
                    // }
                    break;
                case '/login':
                    include_once("Views/login.php");
                    if (isset($_POST["login"])) {
                        $res = $this->login($_POST['username'], $_POST['password']);
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
                    if (!$_SESSION) {
                        header("location:sign-up");
                    }
                    $users = $this->select('user_data');
                    include_once("Views/Admin/header.php");
                    include_once("Views/Admin/main_page.php");
                    include_once("Views/Admin/footer.php");
                    break;
                case '/updateuser':
                    $countrys = $this->select('countries');
                    $states = $this->select('states');
                    $citys = $this->select('cities');

                    $updtsel = $this->select('user_data', array("id" => $_REQUEST['id']));
                    // echo "<pre>";
                    // print_r($updtsel['data']);
                    // echo "</pre>";
                    include_once("Views/Admin/header.php");
                    include_once("Views/Admin/updateuser.php");
                    include_once("Views/Admin/footer.php");

                    if (isset($_POST['submit'])) {
                        if ($_FILES['profile_pic']['error'] == 0) {
                            $this->profileupld($_FILES);
                        } else {
                            $imagename = $updtsel['data'][0]->profile_pic;
                        }

                        $data = array(
                            "username" => $_POST['username'],
                            "email" => $_POST['email'],
                            "mobile" => $_POST['mobile'],
                            "birth" => $_POST['birth'],
                            "gender" => $_POST['gender'],
                            "address" => $_POST['address'],
                            "country" => $_POST['country'],
                            "state" => $_POST['state'],
                            "city" => $_POST['city'],
                            "password" => $_POST['password'],
                            "profile_pic" => $imagename,
                            "last_update" => date('d/m/y  h:i A'),
                        );

                        // echo "<pre>";
                        // print_r($data);
                        // print_r($_FILES);
                        // echo "</pre>";

                        $update = $this->update('user_data', $data, array('id' => $_POST['id']));

                        if ($update['code'] == 1) {
                            echo "<script>alert('Data Updated Succesfully..');</script>";
                            header("location:dashboard");
                        } else {
                            echo "<script>alert('Server error, please try again leter..')</script>";
                        }
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
                case '/sign-up':
                    include_once("Views/sign-up.php");
                    break;
                case '/sendotp':
                    include_once("Views/Admin/send-otp.php");
                    if (isset($_POST['sendmail'])) {
                        $mailexist = $this->select('user_data', array('email' => $_POST['email']));
                        if ($mailexist['code'] == 1) {
                            $emailId = $_POST['email'];
                            $OTP = random_int(100000, 999999);
                            $this->update('user_data', array("otp" => $OTP), array("email" => $emailId));
                            $msg = "Your Forgot password OTP is : $OTP  &ensp; OR &ensp; ";

                            $msg .= "<a href='http://localhost/My_site/forgotpass?email=$emailId'>Click here to change your Password</a>";
                            // echo "<pre>";
                            // print_r($OTP);
                            // echo "</pre>";

                            $this->sentmail($emailId, $msg);
                            header("location:forgotpass?email=$emailId");
                        } else {
                            echo '<script>alert("This Email is Not exist..")</script>';
                        }
                    }
                    break;
                case '/forgotpass':

                    include_once("Views/Admin/forgot-password.php");
                    $email = $_REQUEST['email'];
                    $mainotp = $this->select('user_data', array("email" => $email));
                    // echo "<pre>";
                    print_r($mainotp['data'][0]->otp);
                    // echo "</pre>";
                    if (isset($_REQUEST['resetpass'])) {
                        if ($mainotp['data'][0]->otp == $_REQUEST['inputotp']) {
                            header("location:login");
                        } else {
                            echo '<script>alert("Please Enter valid OTP..!")</script>';
                        }
                    }
                    break;
                case '/verify':
                    include_once("Views/Admin/forgot-password.php");
                    break;

            }
        } else {
            header("location:home");
        }
        ob_flush();
    }
    function profileupld($file)
    {
        $allowed_image_extension = array("png", "PNG", "jpg", "JPG", "jpeg", "JPEG", "webp");
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
            $profilename = $_POST['username'] . "_profile." . $file_extension;
            $target = "assets/uploads/" . $profilename;
            if (move_uploaded_file($_FILES["profile_pic"]["tmp_name"], $target)) {
                $response = array(
                    "type" => "success",
                    "message" => "Image uploaded successfully..",
                    "name" => $profilename
                );
                $imagename = $profilename;
            } else {
                $response = array(
                    "type" => "error",
                    "message" => "Problem in image uploading..!"
                );
            }
        }

    }
    function sentmail($email, $msg)
    {
        try {
            //Server settings
            // $this->mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $this->mail->isSMTP();                                            //Send using SMTP
            $this->mail->Host = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $this->mail->SMTPAuth = true;                                   //Enable SMTP authentication
            $this->mail->Username = 'vajadipak2110@gmail.com';                     //SMTP username
            $this->mail->Password = 'yaetotlvuxiqevjt';                               //SMTP password
            $this->mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $this->mail->Port = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $this->mail->setFrom('vajadipak2110@gmail.com', 'Vaja Dipak');
            $this->mail->addAddress($email, 'Joe User');     //Add a recipient
            // $this->mail->addAddress('ellen@example.com');               //Name is optional
            $this->mail->addReplyTo('vajadipak2110@gmail.com', 'Information');
            // $this->mail->addCC('cc@example.com');
            // $this->mail->addBCC('bcc@example.com');

            //Attachments
            // $this->mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
            // $this->mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

            //Content
            $this->mail->isHTML(true);                                  //Set email format to HTML
            $this->mail->Subject = 'Forgot password OTP';
            $this->mail->Body = $msg;
            $this->mail->AltBody = 'Your Forgot password OTP is : ';

            $this->mail->send();
            return 'Message has been sent';
        } catch (Exception $e) {
            return "Message could not be sent. Mailer Error: {$this->mail->ErrorInfo}";
        }
    }
}

$controllerobj = new Controller;

?>