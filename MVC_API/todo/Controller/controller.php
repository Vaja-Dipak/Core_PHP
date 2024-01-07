<?php
include_once("Model/model.php");
class Controller extends Model
{
    function __construct()
    {
        parent::__construct();
        if (isset($_SERVER['PATH_INFO'])) {
            switch ($_SERVER['PATH_INFO']) {
                case "/":
                case '/home':
                    include_once("Views/main.php");
                    break;

                case '/savedata':
                    $formdata = json_decode(file_get_contents('php://input'), true);
                    $data = $this->insert("todo", $formdata);
                    echo json_encode($data);
                    break;

                case '/showdata':
                    $data = $this->select("todo");
                    echo json_encode($data);
                    break;

                case '/updatedata':
                    $formdata=json_decode(file_get_contents('php://input'),true);
                    $id=$_REQUEST['id'];

                    $data = $this->update("todo",$formdata,$id);
                    echo json_encode($data);
                    break;

                case '/deletedata':
                    $data = $this->delete("todo",$_REQUEST['id']);
                    echo json_encode($data);
                    break;
            }
        } else {
            header("location:home");
        }
    }
}

$obj = new Controller;

?>