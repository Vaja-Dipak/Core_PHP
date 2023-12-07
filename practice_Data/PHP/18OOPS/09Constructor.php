<?php

class DataBaseOp{
    public $connection = "";
    // public $connection = new mysqli("localohts"); //Fatal error: New expressions are not supported in this context in
    public function __construct($projDb) {
        $this->connection = new mysqli("localohts","root","",$projDb); 
        echo "constructor is a method which is invoked by default when objects are created";
        echo "constructor never return ";
        echo "constructor helps to initialize some value for the CLASS/DM";
        echo "like database connectivities";
    }
    function insert() {$this->connection;}
    function update() {$this->connection;}
    function delete() {$this->connection;}
}


$ob = new DataBaseOp("pro1");
$ob = new DataBaseOp("pro5");
$ob = new DataBaseOp("pro454");

?>