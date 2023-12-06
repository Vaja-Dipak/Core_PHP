<?php


$arra = [50, 50, 90, "data", 's', 10.250, true];
// echo $arra;
echo $arra[0];
echo "<pre>";
print_r($arra);
var_dump($arra);
var_export($arra);
echo "</pre>";
?>

<p>debugging array element for developer point of view PHP gives some ready made functions </p>
<ul>
    <li>var_dump($arr)

        <pre>
        array(7) {
            [0]=>
            int(50)
            [1]=>
            int(50)
            [2]=>
            int(90)
            [3]=>
            string(4) "data"
            [4]=>
            string(1) "s"
            [5]=>
            float(10.25)
            [6]=>
            bool(true)
        }
        </pre>
    </li>
    <li>var_export($arr)
        <pre>
        array (
            0 => 50,
            1 => 50,
            2 => 90,
            3 => 'data',
            4 => 's',
            5 => 10.25,
            6 => true,
        )
        </pre>
    </li>
    <li>print_r($arr)
        <pre>
        Array
        (
            [0] => 50
            [1] => 50
            [2] => 90
            [3] => data
            [4] => s
            [5] => 10.25
            [6] => 1
        )
        </pre>
    </li>
</ul>