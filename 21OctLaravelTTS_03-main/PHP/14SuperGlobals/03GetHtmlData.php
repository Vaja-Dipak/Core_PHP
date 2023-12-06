<?php

echo "<pre>";
echo "<br>======= GET  ======<br>";
print_r($_GET);
echo "<br>======= POST  ======<br>";
print_r($_POST);
echo "<br>======= REQEUST  ======<br>";
print_r($_REQUEST);
echo "<br>======= FIELS  ======<br>";
print_r($_FILES);
echo "<br>======= GLOBALS  ======<br>";
print_r($GLOBALS);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul>
        <li>Get method send its data using URL by appending data with ? querystring</li>
        <li>Get method is a default</li>
        <li>Get method limitation 2048 char</li>
        <li>Get method not support file uploading</li>
        <li>Get method we can bookmark</li>
        <li>Get method faster than post</li>
        <li>Get method mostly used for searching</li>
    </ul>
    <form action="">
        <input type="text" name="username" id="">
        <input type="submit" name="btn" id="">
    </form>
    <ul>
        <li>POST method send its data without URL its secure</li>
        <li>POST method no limitation </li>
        <li>POST method support file uploading</li>
        <li>POST method we cant bookmark</li>
        <li>POST method slower than get</li>
        <li>POST method mostly used for securities</li>
    </ul>
    <form method="post">
        <input type="text" name="username_post" id="">
        <input type="submit" name="btn" id="">
    </form>
    <form method="post" enctype="multipart/form-data">
        <input type="text" name="username_post" id="">
        <!-- <input type="file" name="image" id=""> -->
        <input type="file" name="image" accept="image/*" id="">
        <input type="submit" name="btn" id="">
    </form>
</body>

</html>