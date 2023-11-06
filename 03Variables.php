<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h2>Variable</h2>

    <p>vari+able</p>
    <p>Variables in PHP are represented by a dollar sign followed by the name of the variable.</p>
    <p>The variable name is case-sensitive. </p>

    <p> Variable names follow the same rules as other labels in PHP. </p>
    <ul>
        <li>A valid variable name starts with a letter or underscore, followed by any number of letters, numbers, or
            underscores. </li>
        <li>As a regular expression, it would be expressed thus: ^[a-zA-Z_\x80-\x][a\x80-\x]*$
    </ul>
    <ul><strong>Example :-</strong> variable="" in="" php="" is="" a="" name="" of="" memory="" location=""
        that="" holds="" data="" temporary="" storage="" used="" to="" store="" data="" temporarily="" p=""
    </ul>


    <ul><strong>points</strong>
        <li>In PHP, a variable is declared using a <strong>$ sign</strong> followed by the variable name. Here, some
            important points to know about variables:</li>
        <li>As PHP is a loosely typed language, so we do not need to declare the data types of the variables. It
            automatically analyzes the values and makes conversions to its correct datatype.</li>
        <li>After declaring a variable, it can be reused throughout the code.</li>
        <li>Assignment Operator (=) is used to assign the value to a variable.</li>
    </ul>
    <p>Syntax of declaring a variable in PHP is given below:</p>


    <ol start="1" class="dp-xml">
        <li><span>$variablename=value;</span></li>
    </ol>

    <p>Rules for declaring PHP variable:</p>
    <ul class="points">
        <li>A variable must start with a dollar ($) sign, followed by the variable name.</li>
        <li>It can only contain alpha-numeric character and underscore (A-z, 0-9, _).</li>
        <li>A variable name must start with a letter or underscore (_) character.</li>
        <li>A PHP variable name cannot contain spaces.</li>
        <li>One thing to be kept in mind that the variable name cannot start with a number or special symbols.</li>
        <li>PHP variables are case-sensitive, so $name and $NAME both are treated as dierele.</li>
    </ul>

    <h2>PHP Variable: Declaring string, integer, and float</h2>
    <p>Let's see the example to store string, integer, and float values in PHP variables.</p>
    <p>File: variable1.php</p>

    <ol start="1">
        <li>&lt;?php</li>
        <li>$str="hello string";</li>
        <li>$x=200;</li>
        <li>$y=44.6;</li>
        <li>echo "string is: $str" . "&lt;br&gt;";</li>
        <li>echo "integer is: $x" . "&lt;br&gt;";</li>
        <li>echo "float is: $y";</li>
        <li>?&gt;</li>
    </ol>

    <p><strong>Output:</strong></p>
    <?php
    $str = "hello string";
    $x = 200;
    $y = 44.6;
    echo "string is: $str" . "<br>";
    echo "integer is: $x" . "<br>";
    echo "float is: $y";
    ?>

    <h2>PHP Variable: Sum of two variables</h2>
    <p>File: variable2.php</p>

    <ol start="1">
        <li>&lt;?php</li>
        <li>$x = 5;</li>
        <li>$y = 6;</li>
        <li>$z = $x + $y;</li>
        <li>echo $z;</li>
        <li>?&gt;</li>
    </ol>

    <p><strong>Output:</strong></p>
    <?php
    $x = 5;
    $y = 6;
    $z = $x + $y;
    echo $z;
    ?>

    <h2>PHP Variable: case sensitive</h2>
    <p>In PHP, variable names are case sensitive. So variable name "color" is diereolor, COLOR, COLor etc.
    </p>
    <p>File: variable3.php</p>
    <ol start="1">
        <li>&lt;?php</li>
        <li>$color = "red";</li>
        <li>echo "My car is " . $color . "&lt;br&gt;";</li>
        <li>echo "My house is " . $COLOR . "&lt;br&gt;";</li>
        <li>echo "My boat is " . $coLOR . "&lt;br&gt;";</li>
        <li>?&gt;</li>
    </ol>

    <p><strong>Output:</strong></p>

    <pre>My car is red
Notice: Undefined variable: COLOR in C:\wamp\www\variable.php on line 4
My house is 
Notice: Undefined variable: coLOR in C:\wamp\www\variable.php on line 5
My boat is 
</pre>

    <h2>PHP Variable: Rules</h2>
    <p>PHP variables must start with letter or underscore only.</p>
    <p>PHP variable can't be start with numbers and special symbols.</p>
    <p>File: variablevalid.php</p>
    <ol start="1">
        <li>&lt;?php</li>
        <li>$a = "hello"; //letter (valid)</li>
        <li>$_b = "hello"; //underscore (valid)</li>
        <li>echo "$a &lt;br&gt; $_b";</li>
        <li>?&gt;</li>
    </ol>

    <p><strong>Output:</strong></p>
    <?php
    $a = "hello"; //letter (valid)
    $_b = "hello"; //underscore (valid)
    echo "$a <br> $_b";
    ?>

    <p><span class="filename">File: variableinvalid.php</span></p>
    <ol>
        <li>&lt;?php</li>
        <li>$4c = "hello"; //number (invalid)</li>
        <li>$*d = "hello"; //special symbol (invalid)</li>
        <li>echo "$4c &lt;br&gt; $*d";</li>
    </ol>

    <p><strong>Output:</strong></p>
    <pre>Parse error: syntax error, unexpected '4' (T_LNUMBER), expecting variable (T_VARIABLE)
 or '$' in C:\wamp\www\variableinvalid.php on line 2
</pre>

    <h2 class="h3">PHP: Loosely typed language</h2>
    <p>PHP is a loosely typed language, it means PHP automatically converts the variable to its correct data type.</p>
    <hr>
    <br><br>
</body>

</html>