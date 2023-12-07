<?php

use myClass as GlobalMyClass;

// final class myClass{
class myClass{
    public $PublicDM = "This is the Example of public DM";
    protected $protectedDM = "This is the Example of protected DM";
    private $privateDM = "This is the Example of private DM";
    // final public function somemethod(){   
    public function somemethod(){   
        "test";   
        echo "parent method";
    }
}
class otherclass extends GlobalMyClass{
// class otherclass{ //: Class otherclass may not inherit from final class (
    public function somemethod(){    //Cannot override final method myClass::somemethod() in
        echo "child method";
        // foreach ($this as $key => $value) {
        //     echo "<br>Key is :".$key."<br>";
        //     echo "<br>val is :".$value."<br>";
        // }      
    }
}

$myClass = new otherclass;
// echo $myClass->somemethodfromchild();
echo $myClass->somemethod();

foreach ($myClass as $key => $value) {
    echo "<br> $key<br>";
}
?>