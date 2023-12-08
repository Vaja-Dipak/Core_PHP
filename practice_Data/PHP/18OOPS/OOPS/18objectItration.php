<?php

class myClass{
    public $PublicDM = "This is the Example of public DM";
    protected $protectedDM = "This is the Example of protected DM";
    private $privateDM = "This is the Example of private DM";
    public function somemethod(){   
        foreach ($this as $key => $value) {             // Use to print all data member of this class
            echo "<br>Somemethod Key is :".$key."<br>";
            echo "<br>Somemethod  val is :".$value."<br>";
        }      
    }
}
class otherclass extends myClass{
    public function somemethodfromchild(){  
        foreach ($this as $key => $value) {      // Use to ... this class and public/protected properties of extended class
            echo "<br>Child Key is :".$key."<br>";
            echo "<br>Child val is :".$value."<br>";
        } 
          return "from some method";         
    }
}

$MyClass = new otherclass;
echo $MyClass->somemethodfromchild();
echo $MyClass->somemethod();

foreach ($myClass as $key => $value) {      // It print all data members of out side the class and public prop. of class
    echo "out side : <br> $key<br>";

}
?>