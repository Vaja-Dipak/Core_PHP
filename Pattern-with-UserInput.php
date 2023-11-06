<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pattern</title>
</head>

<body>
    <form action="">
        <input type="text" name="size" id="">
        <input type="submit" name="btn" id="">
    </form>
</body>

</html>




<?php

// echo"<pre>";
// print_r($_GET);
// echo"</pre>";

echo "<br>";

$n = $_GET['size'];

for ($i = 0; $i <= $n; $i++) {
    for ($j = 0; $j <= $n; $j++) {
        if ($i == 0 || $i == $n || $j == 0 || $j == $n) {
            echo " * ";
        } else {
            echo " &nbsp&nbsp ";
        }
    }
    echo "<br>";
}

echo "<br>";

for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j <= $i; $j++) {

        echo "* ";
    }
    echo "<br>";
}


?>