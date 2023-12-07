<?php

// Interface are 100% abstraction class
// An interface is declared using the "interface" keyword.
// A class can implement multiple interfaces using "implement" keyword
// All Interfaces are must be impliment compulsory.
// Interfaces can't maintain Non-abstract methods.
// An interface can define method names and arguments, but not the contents of the methods or any other. 

interface a{
    // function test(){
    //     echo "called";
    // }
    function test();
    function test1();
}
interface b{
    // function test(){
    //     echo "called";
    // }
    function test();
    function test1();
}
interface c{
    // function test(){
    //     echo "called";
    // }
    function test();
    function test1();
}
class myclassparent {
    public function FunctionName()
    {
        # code...
    }
}
class myclass extends myclassparent implements a,b,c{
    function test(){

    }
    function test1(){
        
    }
}

?>
