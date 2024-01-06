<?php

class Model
{
    public $con = "";
    function __construct()
    {
        $this->con = new mysqli("localhost", "root", "", "practicedb");
    }

    function select($tbl,$where="")
    {
        $sql="SELECT * FROM $tbl";
        $q=$this->con->query($sql);

        if ($q->num_rows > 0) {
            while ($data = $q->fetch_object()) {
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
    function insert($tbl,$data)
    {
        $key=implode(" ,",array_keys($data));
        $val=implode("','",$data);
        // echo"<pre>";
        // print_r($key);
        // print_r($val);
        // echo"</pre>";
        $sql = "INSERT INTO $tbl($key) VALUES('$val')";
        $sqlex=$this->con->query($sql);

        if ($sqlex > 0) {
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
    function update($tbl,$dt,$where)
    {
        $sql = "UPDATE $tbl SET ";
        foreach ($dt as $key => $value) {
            $sql.="$key='$value',";
        }
        $sql.=rtrim($sql,",");
        $sql.=" WHERE id='$where'";
        
        $sqlex=$this->con->query($sql);
        
        if ($sqlex > 0) {
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
    function delete($tbl,$where)
    {
        $sql = "DELETE FROM $tbl WHERE id=$where";
        $sqlex=$this->con->query($sql);
                
        if ($sqlex > 0) {
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
}
$model = new Model;
?>