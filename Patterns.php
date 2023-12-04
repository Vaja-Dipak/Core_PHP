<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    h1 {
        text-align: center;
    }

    table,
    td {
        border: solid 1px;
    }
</style>

<body>
    <h1>Pattern</h1>

    <table width="100%">
        <tr>
            <td>
                <?php
                for ($i = 0; $i < 10; $i++) {
                    for ($j = 0; $j < $i; $j++) {
                        echo "* ";
                    }
                    echo "<br>";
                }
                ?>
            </td>
            <td>
                <?php
                for ($i = 0; $i < 10; $i++) {
                    for ($j = 1; $j < 10 - $i; $j++) {
                        echo "&nbsp &nbsp";
                    }
                    for ($k = 0; $k < $i * 2 - 1; $k++) {
                        echo "* ";
                    }
                    echo "<br>";
                }
                ?>
            </td>
            <td>
                <?php
                for ($i = 0; $i < 10; $i++) {
                    for ($j = 0; $j < 10 - $i; $j++) {
                        echo "* ";
                    }
                    for ($k = 0; $k < $i * 2; $k++) {
                        echo "&nbsp &nbsp";
                    }
                    for ($l = 0; $l < 10 - $i; $l++) {
                        echo "* ";
                    }
                    echo "<br>";
                }
                ?>
            </td>
            <td>
                <?php
                for ($i = 0; $i < 10; $i++) {
                    for ($j = 0; $j < 10 - $i; $j++) {
                        echo "&nbsp &nbsp";
                    }
                    for ($k = 0; $k < $i; $k++) {
                        echo "* &nbsp&nbsp&nbsp";
                    }
                    echo "<br>";
                }
                ?>
            </td>
            <td>
                <?php
                for ($i = 0; $i < 10; $i++) {
                    for ($j = 0; $j < 10 - $i; $j++) {
                        echo "&nbsp &nbsp";
                    }
                    for ($k = 0; $k < $i; $k++) {
                        echo "* ";
                    }
                    echo "<br>";
                }
                ?>
            </td>
        </tr>
        <tr>
            <td>
                <?php
                for ($i = 0; $i < 10; $i++) {
                    for ($j = 0; $j < $i; $j++) {
                        if($i==9||$j==0||$j==$i-1){
                            echo "* ";
                        }
                        else{
                            echo "&nbsp&nbsp&nbsp";
                        }
                    }
                    echo "<br>";
                }
                ?>
            </td>
            <td>
                <?php
                for ($i = 0; $i < 10; $i++) {
                    for ($j = 0; $j <= 10 - $i-1; $j++) {
                        echo "&nbsp &nbsp";
                    }
                    for ($k = 0; $k < 2*$i + 1; $k++) {
                        if($i==9||$k==0||$k==2*$i){
                            echo"* ";
                        }
                        else{
                            echo "&nbsp &nbsp";
                        }
                    }
                    echo "<br>";
                }
                ?>
            </td>
            <td>
                <?php
                for ($i = 0; $i < 10; $i++) {
                    for ($j = 0; $j < 10 - $i; $j++) {
                        if($i==0||$j==0||$j==9-$i){
                            echo "* ";
                        }
                        else{
                            echo"&nbsp&nbsp&nbsp";
                        }
                    }
                    for ($k = 0; $k < $i * 2; $k++) {
                        echo "&nbsp &nbsp";
                    }
                    for ($l = 0; $l < 10 - $i; $l++) {
                        if($i==0||$l==0||$l==9-$i){
                            echo"* ";
                        }
                        else{
                            echo"&nbsp&nbsp&nbsp";
                        }
                    }
                    echo "<br>";
                }
                ?>
            </td>
            <td>
                <?php
                for ($i = 0; $i < 10; $i++) {
                    for ($j = 0; $j < $i; $j++) {
                        echo "&nbsp &nbsp";
                    }
                    for ($k = 0; $k < 10-$i; $k++) {
                        echo "* &nbsp&nbsp&nbsp";
                    }
                    echo "<br>";
                }
                ?>
            </td>
            <td>
                <?php
                for ($i = 0; $i < 10; $i++) {
                    for ($j = 0; $j < 10 - $i; $j++) {
                        echo "&nbsp &nbsp";
                    }
                    for ($k = 0; $k < $i; $k++) {
                        if($i==9||$k==0||$k==$i-1){
                            echo "* ";
                        }
                        else{
                            echo "&nbsp&nbsp ";
                        }
                    }
                    echo "<br>";
                }
                ?>
            </td>
        </tr>
        </tr>
    </table>

</body>

</html>