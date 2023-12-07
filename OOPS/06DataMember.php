
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Class member variables are called properties. They may be referred to using other terms such as fields, but for the purposes of this reference properties will be used. They are defined by using at least one modifier (such as Visibility, Static Keyword, or, as of PHP 8.1.0, readonly), optionally (except for readonly properties), as of PHP 7.4, followed by a type declaration, followed by a normal variable declaration. This declaration may include an initialization, but this initialization must be a constant value.</p>
</body>
</html>
<?php

class Books{

    // $Author= "Chectan Bhagat"; // wrong way to define datamember without modifier
    public $Author= "Chectan Bhagat";
    public function ThereeIdiots(){
        $ab= "This is the varaible";
        echo "<br>Story of ThereeIdiots comedy and inpiration<br>";
        echo "Wrintten by ",$this->Author;
    }
    public function TwoState(){
        // echo $this->ab;
        echo "<br>Romantic and social story of Two States <br>";
        echo "Wrintten by ",$this->Author;
   }
}


$objectOf = new Books;
$objectOf->TwoState();
?>