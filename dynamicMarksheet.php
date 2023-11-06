<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marksheet</title>
    <style>
        section {
            text-align: center;
        }

        h2 {
            text-transform: uppercase;
            font-family: sans-serif;
        }

        table {
            width: 400px;
            height: 200px;
            margin: 10px auto;
        }
    </style>
</head>

<body>
    <section>
        <h2>Create Marksheet</h2>

        <form action="">
            <label><strong>Student Name : </strong></label>
            <input type="text" name="stdnm" id="">

            <br><br>

            <label>C-Language : </label>
            <input type="text" name="cl" id="">

            <br><br>

            <label>Networking : </label>
            <input type="text" name="net" id="">

            <br><br>

            <label>Mathematics : </label>
            <input type="text" name="math" id="">

            <br><br>

            <label>Oracle : </label>
            <input type="text" name="orcl" id="">

            <br><br>

            <input type="submit">
            <br><br>

        </form>

        <?php
        $stdnm=$_GET['stdnm'];
        $cl = $_GET['cl'];
        $net = $_GET['net'];
        $math = $_GET['math'];
        $orcl = $_GET['orcl'];
        ?>

        <h2>Your Marksheet is Ready</h2>

        <label>Student Name :- </label>
        <?php echo $stdnm; ?>

        <table border="1px">
            <tr>
                <th>Subject</th>
                <th>Marks</th>
            </tr>
            <tr>
                <td>
                    <label>C-Language</label>
                </td>
                <td>
                    <?php echo $cl; ?>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Networking</label>
                </td>
                <td>
                    <?php echo $net; ?>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Mathematics</label>
                </td>
                <td>
                    <?php echo $math; ?>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Oracle</label>
                </td>
                <td>
                    <?php echo $orcl; ?>
                </td>
            </tr>
        </table>

        <b>
        <?php
            $tot = $cl + $net + $math + $orcl;
            $per= $tot/4;

            echo "Total Marks : ". $tot;
            echo"&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp";
            echo "Percentage : ". $per ."%";
            ?>
        </b>

    </section>
</body>

</html>