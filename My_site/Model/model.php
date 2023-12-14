<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
date_default_timezone_set('Asia/Kolkata');

class Model
{

    public $db = "";
    function __construct()
    {
        try {
            $this->db = new mysqli("localhost", "root", "", "practcedb");
        } catch (\Exception $e) {
            if (!file_exists("log")) {
                mkdir("log");
            }
            $filename = "log/errorlog" . date('d_m_y') . ".txt";
            $error = PHP_EOL . "Error time >>> " . date('h:i:s A') . PHP_EOL;
            $error .= PHP_EOL . "Error data >>> " . $e->getMessage();

            file_put_contents($filename, $error, FILE_APPEND);
        }
    }
    function insert($table,$dt)
    {
        $colm=implode(",",array_keys($dt));
        $val=implode("','",$dt);

        // echo"<pre>";
        // print_r($colm)."<br>";
        // print_r($val);
        // echo"<pre>";

        $sql="INSERT INTO $table($colm) VALUES('$val')";
        // $this->db->query($sql);
        // echo $this->db->affected_rows();
        // echo $sql;
    }
    function select()
    {
        $sql = "";
    }
    function update()
    {
        $sql = "";
    }
    function delete()
    {
        $sql = "";
    }
}

$model = new Model;

?>