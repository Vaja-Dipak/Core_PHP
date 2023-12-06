<?php


$variableName = "Data";
echo $variableName

?>
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
    <p>Variables in PHP are represented by a dollar sign followed by the name of the variable. The variable name is case-sensitive. </p>

    <p> Variable names follow the same rules as other labels in PHP. A valid variable name starts with a letter or underscore, followed by any number of letters, numbers, or underscores. As a regular expression, it would be expressed thus: ^[a-zA-Z_\x80-\xff][a-zA-Z0-9_\x80-\xff]*$</p>

    <pa variable="" in="" php="" is="" a="" name="" of="" memory="" location="" that="" holds="" data.="" temporary="" storage="" used="" to="" store="" data="" temporarily.<="" p="">
        <p>In PHP, a variable is declared using a <strong>$ sign</strong> followed by the variable name. Here, some important points to know about variables:</p>
        <ul class="points">
            <li>As PHP is a loosely typed language, so we do not need to declare the data types of the variables. It automatically analyzes the values and makes conversions to its correct datatype.</li>
            <li>After declaring a variable, it can be reused throughout the code.</li>
            <li>Assignment Operator (=) is used to assign the value to a variable.</li>
        </ul>
        <p>Syntax of declaring a variable in PHP is given below:</p>
        <div class="codeblock">
            <div class="dp-highlighter">
                <div class="bar">
                    <div class="tools"><a href="#" onclick="dp.sh.Toolbar.Command('ViewSource',this);return false;"></a><a href="#" onclick="dp.sh.Toolbar.Command('PrintSource',this);return false;"></a><a href="#" onclick="dp.sh.Toolbar.Command('About',this);return false;"></a></div>
                </div>
                <ol start="1" class="dp-xml">
                    <li class="alt"><span><span>$</span><span class="attribute">variablename</span><span>=</span><span class="attribute-value">value</span><span>;&nbsp;&nbsp;</span></span></li>
                </ol>
            </div><textarea name="code" class="xml" style="display: none;">$variablename=value;
</textarea>
        </div>
        <p>Rules for declaring PHP variable:</p>
        <ul class="points">
            <li>A variable must start with a dollar ($) sign, followed by the variable name.</li>
            <li>It can only contain alpha-numeric character and underscore (A-z, 0-9, _).</li>
            <li>A variable name must start with a letter or underscore (_) character.</li>
            <li>A PHP variable name cannot contain spaces.</li>
            <li>One thing to be kept in mind that the variable name cannot start with a number or special symbols.</li>
            <li>PHP variables are case-sensitive, so $name and $NAME both are treated as different variable.</li>
        </ul>
        <h2 class="h3">PHP Variable: Declaring string, integer, and float</h2>
        <p>Let's see the example to store string, integer, and float values in PHP variables.</p>
        <p><span class="filename">File: variable1.php</span></p>
        <div class="codeblock">
            <div class="dp-highlighter">
                <div class="bar">
                    <div class="tools"><a href="#" onclick="dp.sh.Toolbar.Command('ViewSource',this);return false;"></a><a href="#" onclick="dp.sh.Toolbar.Command('PrintSource',this);return false;"></a><a href="#" onclick="dp.sh.Toolbar.Command('About',this);return false;"></a></div>
                </div>
                <ol start="1" class="dp-xml">
                    <li class="alt"><span><span class="tag">&lt;?</span><span class="tag-name">php</span><span>&nbsp;&nbsp;</span></span></li>
                    <li class=""><span>$<span class="attribute">str</span><span>=</span><span class="attribute-value">"hello&nbsp;string"</span><span>;&nbsp;&nbsp;</span></span></li>
                    <li class="alt"><span>$<span class="attribute">x</span><span>=</span><span class="attribute-value">200</span><span>;&nbsp;&nbsp;</span></span></li>
                    <li class=""><span>$<span class="attribute">y</span><span>=</span><span class="attribute-value">44</span><span>.6;&nbsp;&nbsp;</span></span></li>
                    <li class="alt"><span>echo&nbsp;"string&nbsp;is:&nbsp;$str&nbsp;<span class="tag">&lt;</span><span class="tag-name">br</span><span class="tag">/&gt;</span><span>";&nbsp;&nbsp;</span></span></li>
                    <li class=""><span>echo&nbsp;"integer&nbsp;is:&nbsp;$x&nbsp;<span class="tag">&lt;</span><span class="tag-name">br</span><span class="tag">/&gt;</span><span>";&nbsp;&nbsp;</span></span></li>
                    <li class="alt"><span>echo&nbsp;"float&nbsp;is:&nbsp;$y&nbsp;<span class="tag">&lt;</span><span class="tag-name">br</span><span class="tag">/&gt;</span><span>";&nbsp;&nbsp;</span></span></li>
                    <li class=""><span><span class="tag">?&gt;</span><span>&nbsp;&nbsp;</span></span></li>
                </ol>
            </div><textarea name="code" class="xml" style="display: none;">&lt;?php
$str="hello string";
$x=200;
$y=44.6;
echo "string is: $str &lt;br/&gt;";
echo "integer is: $x &lt;br/&gt;";
echo "float is: $y &lt;br/&gt;";
?&gt;
</textarea>
        </div>
        <p><strong>Output:</strong></p>
        <div class="codeblock3">
            <pre>string is: hello string
integer is: 200
float is: 44.6 
</pre>
        </div>
        <h2 class="h3">PHP Variable: Sum of two variables</h2>
        <p><span class="filename">File: variable2.php</span></p>
        <div class="codeblock">
            <div class="dp-highlighter">
                <div class="bar">
                    <div class="tools"><a href="#" onclick="dp.sh.Toolbar.Command('ViewSource',this);return false;"></a><a href="#" onclick="dp.sh.Toolbar.Command('PrintSource',this);return false;"></a><a href="#" onclick="dp.sh.Toolbar.Command('About',this);return false;"></a></div>
                </div>
                <ol start="1" class="dp-xml">
                    <li class="alt"><span><span class="tag">&lt;?</span><span class="tag-name">php</span><span>&nbsp;&nbsp;</span></span></li>
                    <li class=""><span>$<span class="attribute">x</span><span>=</span><span class="attribute-value">5</span><span>;&nbsp;&nbsp;</span></span></li>
                    <li class="alt"><span>$<span class="attribute">y</span><span>=</span><span class="attribute-value">6</span><span>;&nbsp;&nbsp;</span></span></li>
                    <li class=""><span>$<span class="attribute">z</span><span>=$x+$y;&nbsp;&nbsp;</span></span></li>
                    <li class="alt"><span>echo&nbsp;$z;&nbsp;&nbsp;</span></li>
                    <li class=""><span><span class="tag">?&gt;</span><span>&nbsp;&nbsp;</span></span></li>
                </ol>
            </div><textarea name="code" class="xml" style="display: none;">&lt;?php
$x=5;
$y=6;
$z=$x+$y;
echo $z;
?&gt;
</textarea>
        </div>
        <p><strong>Output:</strong></p>
        <div class="codeblock3">
            <pre>11
</pre>
        </div>
        <h2 class="h3">PHP Variable: case sensitive</h2>
        <p>In PHP, variable names are case sensitive. So variable name "color" is different from Color, COLOR, COLor etc.</p>
        <p><span class="filename">File: variable3.php</span></p>
        <div class="codeblock">
            <div class="dp-highlighter">
                <div class="bar">
                    <div class="tools"><a href="#" onclick="dp.sh.Toolbar.Command('ViewSource',this);return false;"></a><a href="#" onclick="dp.sh.Toolbar.Command('PrintSource',this);return false;"></a><a href="#" onclick="dp.sh.Toolbar.Command('About',this);return false;"></a></div>
                </div>
                <ol start="1" class="dp-xml">
                    <li class="alt"><span><span class="tag">&lt;?</span><span class="tag-name">php</span><span>&nbsp;&nbsp;</span></span></li>
                    <li class=""><span>$<span class="attribute">color</span><span>=</span><span class="attribute-value">"red"</span><span>;&nbsp;&nbsp;</span></span></li>
                    <li class="alt"><span>echo&nbsp;"My&nbsp;car&nbsp;is&nbsp;"&nbsp;.&nbsp;$color&nbsp;.&nbsp;"<span class="tag">&lt;</span><span class="tag-name">br</span><span class="tag">&gt;</span><span>";&nbsp;&nbsp;</span></span></li>
                    <li class=""><span>echo&nbsp;"My&nbsp;house&nbsp;is&nbsp;"&nbsp;.&nbsp;$COLOR&nbsp;.&nbsp;"<span class="tag">&lt;</span><span class="tag-name">br</span><span class="tag">&gt;</span><span>";&nbsp;&nbsp;</span></span></li>
                    <li class="alt"><span>echo&nbsp;"My&nbsp;boat&nbsp;is&nbsp;"&nbsp;.&nbsp;$coLOR&nbsp;.&nbsp;"<span class="tag">&lt;</span><span class="tag-name">br</span><span class="tag">&gt;</span><span>";&nbsp;&nbsp;</span></span></li>
                    <li class=""><span><span class="tag">?&gt;</span><span>&nbsp;&nbsp;</span></span></li>
                </ol>
            </div><textarea name="code" class="xml" style="display: none;">&lt;?php
$color="red";
echo "My car is " . $color . "&lt;br&gt;";
echo "My house is " . $COLOR . "&lt;br&gt;";
echo "My boat is " . $coLOR . "&lt;br&gt;";
?&gt;
</textarea>
        </div>
        <p><strong>Output:</strong></p>
        <div class="codeblock3">
            <pre>My car is red
Notice: Undefined variable: COLOR in C:\wamp\www\variable.php on line 4
My house is 
Notice: Undefined variable: coLOR in C:\wamp\www\variable.php on line 5
My boat is 
</pre>
        </div>
        <h2 class="h3">PHP Variable: Rules</h2>
        <p>PHP variables must start with letter or underscore only.</p>
        <p>PHP variable can't be start with numbers and special symbols.</p>
        <p><span class="filename">File: variablevalid.php</span></p>
        <div class="codeblock">
            <div class="dp-highlighter">
                <div class="bar">
                    <div class="tools"><a href="#" onclick="dp.sh.Toolbar.Command('ViewSource',this);return false;"></a><a href="#" onclick="dp.sh.Toolbar.Command('PrintSource',this);return false;"></a><a href="#" onclick="dp.sh.Toolbar.Command('About',this);return false;"></a></div>
                </div>
                <ol start="1" class="dp-xml">
                    <li class="alt"><span><span class="tag">&lt;?</span><span class="tag-name">php</span><span>&nbsp;&nbsp;</span></span></li>
                    <li class=""><span>$<span class="attribute">a</span><span>=</span><span class="attribute-value">"hello"</span><span>;//letter&nbsp;(valid)&nbsp;&nbsp;</span></span></li>
                    <li class="alt"><span>$<span class="attribute">_b</span><span>=</span><span class="attribute-value">"hello"</span><span>;//underscore&nbsp;(valid)&nbsp;&nbsp;</span></span></li>
                    <li class=""><span>&nbsp;&nbsp;</span></li>
                    <li class="alt"><span>echo&nbsp;"$a&nbsp;<span class="tag">&lt;</span><span class="tag-name">br</span><span class="tag">/&gt;</span><span>&nbsp;$_b";&nbsp;&nbsp;</span></span></li>
                    <li class=""><span><span class="tag">?&gt;</span><span>&nbsp;&nbsp;</span></span></li>
                </ol>
            </div><textarea name="code" class="xml" style="display: none;">&lt;?php
$a="hello";//letter (valid)
$_b="hello";//underscore (valid)

echo "$a &lt;br/&gt; $_b";
?&gt;
</textarea>
        </div>
        <p><strong>Output:</strong></p>
        <div class="codeblock3">
            <pre>hello 
hello
</pre>
        </div>
        <p><span class="filename">File: variableinvalid.php</span></p>
        <div class="codeblock">
            <div class="dp-highlighter">
                <div class="bar">
                    <div class="tools"><a href="#" onclick="dp.sh.Toolbar.Command('ViewSource',this);return false;"></a><a href="#" onclick="dp.sh.Toolbar.Command('PrintSource',this);return false;"></a><a href="#" onclick="dp.sh.Toolbar.Command('About',this);return false;"></a></div>
                </div>
                <ol start="1" class="dp-xml">
                    <li class="alt"><span><span class="tag">&lt;?</span><span class="tag-name">php</span><span>&nbsp;&nbsp;</span></span></li>
                    <li class=""><span>$<span class="attribute">4c</span><span>=</span><span class="attribute-value">"hello"</span><span>;//number&nbsp;(invalid)&nbsp;&nbsp;</span></span></li>
                    <li class="alt"><span>$*<span class="attribute">d</span><span>=</span><span class="attribute-value">"hello"</span><span>;//special&nbsp;symbol&nbsp;(invalid)&nbsp;&nbsp;</span></span></li>
                    <li class=""><span>&nbsp;&nbsp;</span></li>
                    <li class="alt"><span>echo&nbsp;"$4c&nbsp;<span class="tag">&lt;</span><span class="tag-name">br</span><span class="tag">/&gt;</span><span>&nbsp;$*d";&nbsp;&nbsp;</span></span></li>
                    <li class=""><span><span class="tag">?&gt;</span><span>&nbsp;&nbsp;</span></span></li>
                </ol>
            </div><textarea name="code" class="xml" style="display: none;">&lt;?php
$4c="hello";//number (invalid)
$*d="hello";//special symbol (invalid)

echo "$4c &lt;br/&gt; $*d";
?&gt;
</textarea>
        </div>
        <p><strong>Output:</strong></p>
        <div class="codeblock3">
            <pre>Parse error: syntax error, unexpected '4' (T_LNUMBER), expecting variable (T_VARIABLE)
 or '$' in C:\wamp\www\variableinvalid.php on line 2
</pre>
        </div>
        <h2 class="h3">PHP: Loosely typed language</h2>
        <p>PHP is a loosely typed language, it means PHP automatically converts the variable to its correct data type. </p>
        <hr>
        <br><br>
    </pa>
</body>

</html>