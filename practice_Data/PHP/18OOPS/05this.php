<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h2>$this </h2>
    <p>In PHP, $this keyword references the current object of the class. The $this keyword allows you to access the properties and methods of the current object within the class using the object operator (->): </p>
    <ul>
        <li>$this->property</li>
        <li>$this->method()</li>
    </ul>
    <p>Code language: PHP (php) The $this keyword is only available within a class. It doesn’t exist outside of the class. If you attempt to use the $this outside of a class, you’ll get an error. </p>
    <p>When you access an object property using the $this keyword, you use the $ with the this keyword only. And you don’t use the $ with the property name. For example: </p>
    <pre>In PHP, $this is a pseudo-variable that references the current object. It is created when the object of the class is created. It is available to use when a class method is called from within an object context. 

    $this is used for calling non-static methods. Calling a non-static method statically throws an error. 
    $this allows you to access the properties and methods of the current object within the class. 
    $this is a special read-only variable that is not declared anywhere in the code. It represents a value that changes depending on the context of program execution. 
</pre>
</body>

</html>

<?php

class ABC
{
    public function Testing()
    {
        echo "something";
        return "data";
    }
    public function Checking()
    {
        $res = $this->Testing();
        echo $res;
        echo "<br>data";
    }
}


$objectOf = new ABC;
$objectOf->Checking();
?>