<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h2>Inheritance</h2>
    <p>access paretn class properties to child</p>
    <p>Object will be create of child</p>
    <pre>
    class MathOperation{
        function AdditionOfTwo($a,$b)
        {
            return $a+$b;
        }
    }

    class AdvanceMathOperation extends MathOperation{
        function DivisionOfTow($a,$b)
        {
            return $a+$b;
        }
    }
    $object = new AdvanceMathOperation;
    echo $object->AdditionOfTwo(60,90);
    </pre>
    <?php
    
    class MathOperation{
        function AdditionOfTwo($a,$b){
            return $a+$b; // 10000 line
        }
        function AdditionOfThree($a,$b,$c){
            return $a+$b+$c;
        }
        function AdditionOfTwoOrTheree($a,$b,$c=0){
            return $a+$b+$c;
        }
    }

    class AdvanceMathOperation extends MathOperation{
        function AverageOfTow($x,$y){
            // $sum = $a+$b; // 10000 line
            $sum = $this->AdditionOfTwo($x,$y); // 10000 line
            $ans = $sum/2;
            return $ans;
        }
        function AdditionOfThree($a,$b,$c){
            return $a+$b+$c;
        }
        function AdditionOfTwoOrTheree($a,$b,$c=0){
            return $a+$b+$c;
        }
    }


    $object = new AdvanceMathOperation;
    echo $object->AdditionOfTwo(60,90);
    echo "<br>";
    echo $object->AdditionOfThree(60,90,80);
    echo "<br>";
    echo $object->AdditionOfTwoOrTheree(60,900);
    echo "<br>";
    echo $object->AdditionOfTwoOrTheree(60,90,80);
    ?>
</body>

</html>