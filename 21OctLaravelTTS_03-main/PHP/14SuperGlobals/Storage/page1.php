<?php
if (isset($_POST["btn"])) {
    echo "<pre>";
    print_r($_REQUEST);
    echo "</pre>";
}
?>
<form action="" method="post">
    <input type="text" name="data" id="">
    <input type="submit" name="btn" id="">
</form>
<form action="page2.php" method="post">
    <input type="text" name="data" id="">
    <input type="submit" name="btn" id="">
</form>