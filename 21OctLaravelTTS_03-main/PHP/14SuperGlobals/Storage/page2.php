<?php
if (isset($_POST["btn"])) {
    echo "<pre>";
    print_r($_REQUEST);
    echo "</pre>";
    header("location:page3.php?data=".$_REQUEST['data']);
}
?>