<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .class{
            color: red !important;
        }
    </style>
</head>

<body>
    <ol>
        <li>Arithmetic Operators</li>
        <li>Logical or Relational Operators</li>
        <li>Comparison Operators</li>
        <li>Conditional or Ternary Operators</li>
        <li>Assignment Operators</li>
        <li>Spaceship Operators (Introduced in PHP 7)</li>
        <li>Array Operators</li>
        <li>Increment/Decrement Operators</li>
        <li>String Operators</li>
    </ol>
    <img src="PHP-operators-types.png" alt="">
    <!-- <img src="arthmatic.png" alt="">
    <img src="comparesion.png" width="100%" alt=""> -->

    <?php 
    
    var_dump(50 === 50.00);
    // exit;
    $a = 50; 
    echo $a +=50; // $a = $a + 50;

    $fname = "Test";
    $lname = "Xyz";
    echo "Full name".$fname." ".$lname;
    // echo $a;
    echo 10==10.00;
    echo "<br>=========== spaceship START========== <br>";
    echo 10<=>10;
    echo "<br>=========== spaceship END========== <br>";

    $marks = 41;
    if ($marks > 50) {
        echo "Pass";
    } else {
        echo "try again";
        # code...
    }
    echo ($marks > 50)? "Pass":"Try again";

    $spaceRes= 506 <=>505;
    echo "<br>spaceRes ".$spaceRes;
?>
<br><br><br><br><br><br><br><br><br>
</body>

</html>