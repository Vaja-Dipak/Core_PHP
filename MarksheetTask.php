<?php

$guj = 79;
$math = 39;
$eng = 86;
$sci = 94;
$ss = 84;

$tot = $guj+$math+$eng+$sci+$ss;
$per = $tot/5;

echo"Total Marks = $tot <br>";
echo"Percentage = $per <br>";

if($per >= 90){
    echo"A Grade";
}
elseif($per >=80  &&  $per < 90){
    echo"B Grade";
}
elseif($per >=70  &&  $per < 80){
    echo"C Grade";
}
elseif($per >=55  &&  $per < 70){
    echo"D Grade";
}
elseif($per >33  &&  $per < 55){
    echo"E Grade";
}
else{
    echo"Fail..";
}

?>