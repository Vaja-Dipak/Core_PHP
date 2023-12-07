<?php
class getSetCall{
    public function __get($var){
        echo " <br>called".$var;
    }
    public function __set($var,$val){
        echo "<br>".$var,$val;
    }
    public function __call($method,$arr){
        echo "<pre>";
        print_r($method);
        print_r($arr);
        echo "</pre>";
    }

}

$Data = new getSetCall;
$Data->someData;
$Data->kaipan;
$Data->username = "Some data";
$Data->email = "mail@mail.com";
// $Data->insert("aaa","dsadfasd");
// $Data->insert("aaa","dsadfasd","test");
?>