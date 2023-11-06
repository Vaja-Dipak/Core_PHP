<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Conditional-Statement</h1>

    <p>PHP allows us to perform actions based on some type of conditions that may be logical or comparative. Based on
        the result of these conditions i.e., either TRUE or FALSE, an action would be performed as asked by the user.
        It's just like a two- way path. If you want something then go this way or else turn that way. To use this
        feature, PHP provides us with four conditional statements:</p>

    <ul>
        <li><strong>if</strong> statement</li>
        <li><strong>if…else</strong> statement</li>
        <li><strong>if…elseif…else</strong> statement</li>
        <li><strong>switch</strong> statement</li>
    </ul>

    <p>Let us now look at each one of these in details:</p>
    <ol>
        <li>
            <strong>if Statement</strong>: This statement allows us to set a condition. On being TRUE, the following
            block of code enclosed within the if clause will be executed.
            <p><strong>Syntax </strong>:</p>
            <pre>
            if (condition){
                // if TRUE then execute this code
            }
</pre>
            <p>Example:</p>
            <pre>
            &lt;?php
            $x = 12;
            if ($x > 0) {
                echo "The number is positive";
            }
            ?>
            </pre>

            <p>Output:</p>
            <pre>The number is positive</pre>
            <p><strong>Flowchart</strong>:<br>
                <img src="https://media.geeksforgeeks.org/wp-content/uploads/if-statement-1.jpg" width="249"
                    height="440" alt="" class="aligncenter size-full">
            </p>
        </li>

        <li>
            <strong>if…else Statement</strong>: We understood that if a condition will hold i.e., TRUE, then the block
            of code within if will be executed. But what if the condition is not TRUE and we want to perform an action?
            This is where else comes into play. If a condition is TRUE then if block gets executed, otherwise else block
            gets executed.

            <p><strong>Syntax</strong>:</p>
            <pre>
            if (condition) {
                // if TRUE then execute this code
            }
            else{
                // if FALSE then execute this code
            }
</pre>
            <p>Example:</p>
            <pre>
            &lt;?php
            $x = -12;
            if ($x > 0) {
                echo "The number is positive";
            } else {
                echo "The number is negative";
            }
            ?>
            </pre>
            <p>Output:</p>
            <pre>The number is negative
</pre>
            <p><strong>Flowchart</strong>:<br>
                <img src="https://media.geeksforgeeks.org/wp-content/uploads/if-else-1.jpg" width="316" height="440"
                    alt="" class="aligncenter size-full">
            </p>
        </li>

        <li>
            <strong>if…elseif…else Statement</strong>: This allows us to use multiple if…else statements. We use this
            when there are multiple conditions of TRUE cases.<br>
            <strong>Syntax</strong>:<p></p>
            <pre>
            if (condition) {
            // if TRUE then execute this code
            }
            elseif {
                // if TRUE then execute this code
            }
            elseif {
                // if TRUE then execute this code
            }
            else {
                // if FALSE then execute this code
            }
</pre>
            <p>Example:</p>
            <pre>
            &lt;?php
            $x = "August";
            if ($x == "January") {
                echo "Happy Republic Day";
            } 
            elseif ($x == "August") {
                echo "Happy Independence Day!!!";
            } 
            else {
                echo "Nothing to show";
            }
            ?>
            </pre>

            <p>Output:</p>
            <pre>Happy Independence Day!!!</pre>

            <p><strong>Flowchart</strong>:<br>
                <img src="https://media.geeksforgeeks.org/wp-content/uploads/if-elseif-ladder-1.jpg" width="580"
                    height="607" alt="" class="aligncenter size-full">
            </p>
        </li>

        <li>
            <p><strong>switch Statement</strong>: The “switch” performs in various cases i.e., it has various cases to
                which it matches the condition and appropriately executes a particular case block. It first evaluates an
                expression and then compares with the values of each case. If a case matches then the same case is
                executed.
                To use switch, we need to get familiar with two different keywords namely, <strong>break</strong> and
                <strong>default</strong>.
            </p>
            <ol>
                <li>The <strong>break</strong> statement is used to stop the automatic control flow into the next cases
                    and exit from the switch case.</li>
                <li>The <strong>default</strong> statement contains the code that would execute if none of the cases
                    match.</li>
            </ol>

            <p><strong>Syntax</strong>:</p>
            <pre>
            switch(n) {
            case statement1:
                code to be executed if n==statement1;
                break;
            case statement2:
                code to be executed if n==statement2;
                break;
            case statement3:
                code to be executed if n==statement3;
                break;
            case statement4:
                code to be executed if n==statement4;
                break;
            ......
            default:
                code to be executed if n != any case;
            }
</pre>
            <p>Example:</p>
            <pre>
            &lt;?php
            echo "&lt;br&gt;";
            $Lang = "1";
            
            switch ($Lang) {
                case '1':
                    echo "Language Choosen as Gujarati";
                    break;
                case '2':
                    echo "Language Choosen as Hindi";
                    break;
                case '3':
                    echo "Language Choosen as English";
                    break;
            
                default:
                    # code...
                    break;
            }
            ?>
            </pre>

            <p>Output:</p>
            <pre>Language Choosen as Gujarati</pre>
            <p><strong>Flowchart</strong>:<br>
                <img src="https://media.geeksforgeeks.org/wp-content/uploads/switch-case.jpg" width="524" height="801"
                    alt="" class="aligncenter size-full">
            </p>
        </li>
    </ol>

    <p><strong>Ternary Operators</strong></p>
    <p>In addition to all this conditional statements, PHP provides a shorthand way of writing if…else, called Ternary
        Operators. The statement uses a question mark (?) and a colon (:) and takes three operands: a condition to
        check, a result for TRUE and a result for FALSE.<br>
        <strong>Syntax</strong>:
    </p>
    <pre>(condition) ? if TRUE execute this : otherwise execute this;</pre>
    <p>Example:</p>
    <pre>
    &lt;?php
    $x = -12;
    echo ($x > 0) ? 'The number is positive' : 'The number is negative';
    ?>
    </pre>

    <p>Output:</p>
    <pre>
    The number is negative
</pre>
    <br>
    </div>
</body>

</html>