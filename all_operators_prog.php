<li>Arithmetic Operators (+,-,*,/,**,%)</li>
<li>Logical or Relational Operators (and,or,xor,&&,||,!)</li>
<li>Comparison Operators (==,===,!=,<>,!==,>,<,>=,<=,<=>)</li>
<li>Conditional or Ternary Operators (?:,??)</li>
<li>Assignment Operators (=,+=,-=,*=,/=,%=)</li>
<li>Spaceship Operators (Introduced in PHP 7) (<=>)</li>
<li>Array Operators (+,==,===,!=,<>,!==)</li>
<li>String Operators (.,.=)</li>
<li>Increment/Decrement Operators (++$variable, $variable++, --$variable, $variable--)</li>

<?php

$a = 23;
$b = 12;
$c = 57;

echo "<br>";
echo "<br>=========== Arithmetic Operators ========== <br>";

$sum=$a+$b;
echo "Sum of $a and $b = " . $sum . "<br>";

$sub=$a-$b;
echo "subtraction of $a into $b = " . $sub . "<br>";

$mul=$a*$b;
echo "multiplication of $a and $b = " . $mul . "<br>";

$div=$a/$b;
echo "division of $a and $b = " . $div . "<br>";

$mod=$a%$b;
echo "modulo of $a and $b = " . $mod . "<br>";

$expo=$b**3;
echo "power of $b for 3($b*$b*$b) = " . $expo . "<br>";


echo "<br>=========== Logical Operators ========== <br>";


echo " (True - False) <br>";

echo "<br> AND => ";
    var_export(true and false);
echo "<br> OR => ";
    var_export(true or false);
echo "<br> && => ";
    var_export(true && false);
echo "<br> || => ";
    var_export(true || false);


echo "<br><br>=========== spaceship Operator========== <br>";
    echo 27 <=> 17; echo "<br>";
    echo 10 <=> 15; echo "<br>";
    echo 10 <=> 10;


echo "<br><br>=========== All Operators ========== <br>";


    var_dump(50 === 50.00);     //comparison
    $a = 50;
    echo"<br>". $a += 50; // $a = $a + 50;     assignment
    
    $fname = "Test";
    $lname = "Xyz";
    echo "<br> Full name : " . $fname . " " . $lname;   //string
    // echo $a;
    echo 10 == 10.00;        //comparison

    $marks = 41;
    if ($marks > 50) {       //conditional
        echo "Pass";
    } else {
        echo "try again";
        # code...
    }
    echo "<br>";

    echo ($marks > 50) ? "Pass" : "Try again";  //ternary

    $spaceRes = 506 <=> 505;                //spaceship
    echo "<br>spaceRes " . $spaceRes;

echo "<br><br>";

?>