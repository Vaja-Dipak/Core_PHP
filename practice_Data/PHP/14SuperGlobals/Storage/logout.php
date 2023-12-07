<?php


session_start();
session_destroy();  
// setcookie("username"," ", -36000);
// setcookie("username","",time()+3600);
// setcookie("password",$_POST["password"],time()+3600);

// echo "called";

// setcookie("","", time() -0,"/");
header("location:login.php");

?>