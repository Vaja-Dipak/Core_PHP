<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
date_default_timezone_set('Asia/Kolkata');

class Model
{

    public $db = "";
    function __construct()
    {
        try {
            $this->db = new mysqli("localhost", "root", "", "practicedb");
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
    function insert($table, $dt)
    {
        $colm = implode(",", array_keys($dt));
        $val = implode("','", $dt);

        // echo"<pre>";
        // print_r($colm)."<br>";
        // print_r($val);
        // print_r($this->db);
        // echo"</pre>";

        $sql = "INSERT INTO $table($colm) VALUES('$val')";
        $sqlexe = $this->db->query($sql);
        // echo $this->db->affected_rows();
        // echo $sql;
        if ($sqlexe > 0) {
            $Res["code"] = 1;
            $Res["msg"] = "Success";
            $Res["data"] = 1;
        } else {
            $Res["code"] = 0;
            $Res["msg"] = "Try again";
            $Res["data"] = 0;
        }
        return $Res;
    }
    function login($uname, $pass)
    {
        $sql = "SELECT * FROM user_data WHERE password='$pass' AND (username='$uname' OR email='$uname' OR mobile='$uname')";
        $sqlex = $this->db->query($sql);
        // echo"<pre>";
        // print_r($sqlex);
        // echo"</pre>";
        if ($sqlex->num_rows > 0) {
            $fetchdt = $sqlex->fetch_object();

            $Res['code'] = 1;
            $Res['msg'] = "success";
            $Res['data'] = $fetchdt;
        } else {
            $Res['code'] = 0;
            $Res['msg'] = "try again";
            $Res['data'] = 0;
        }
        return $Res;
    }
    function select($tbl, $where = "")
    {
        $sql = "SELECT * FROM $tbl";
        if ($where != "") {
            $sql .= " WHERE ";
            foreach ($where as $key => $value) {
                $sql .= " $key = $value AND";
            }
            $sql = rtrim($sql, "AND");
        }
        $sqlexe = $this->db->query($sql);
        if ($sqlexe->num_rows > 0) {
            while ($data = $sqlexe->fetch_object()) {
                $fetchdata[] = $data;
            }
            $Res['code'] = 1;
            $Res['msg'] = "success";
            $Res['data'] = $fetchdata;
        } else {
            $Res['code'] = 0;
            $Res['msg'] = "try again";
            $Res['data'] = 0;
        }
        return $Res;
    }
    function update($tbl, $data, $id)
    {
        $sql = "UPDATE $tbl SET ";
        // $keys=implode(array_keys($data));
        foreach ($data as $key => $value) {
            $sql .= " $key = '$value',";
            // echo $keys ." , ";
        }
        $sql = rtrim($sql, ",");
        $sql .= " WHERE ID = $id";
        $updexe = $this->db->query($sql);

        if ($updexe > 0) {
            $Res['code'] = 1;
            $Res['msg'] = "success";
            $Res['data'] = 1;
        } else {
            $Res['code'] = 0;
            $Res['msg'] = "try again";
            $Res['data'] = 0;
        }
        return $Res;
    }
    function delete($tbl, $where)
    {
        $sql = "DELETE FROM $tbl WHERE ";
        foreach ($where as $key => $value) {
            $sql .= "$key=$value AND";
        }
        $sql = rtrim($sql, "AND");
        // echo $sql;
        $sqlexe = $this->db->query($sql);
        if ($sqlexe > 0) {
            $Res['code'] = 1;
            $Res['msg'] = "success";
            $Res['data'] = 1;
        } else {
            $Res['code'] = 0;
            $Res['msg'] = "try again";
            $Res['data'] = 0;
        }
    }
}

$model = new Model;

?>