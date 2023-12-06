<?php
// function addition($a,$b){
//     return 10+10;
// }
// addition(50,60);
// $arr = array("tops","Techno");
$arr = array(100,200,300,400);
// echo "<pre>";
// print_r($arr);
// echo "</pre>";

// echo $arr[1]
// foreach ($arr as $key => $value) {
//     # code...
//     echo $value;
// }
function AccessArrayUseFilter($kaioan){
    // echo $kaioan+5;
    return $kaioan+5;
}
$arrFilter = array_filter($arr,"AccessArrayUseFilter");
echo "<pre>";
// print_r($arr);
echo "========== array_filter ========= ";
print_r($arrFilter);
// exit;
function AccessArrayUseMap($arRec){
    return $arRec+5;
}
$arrMapRes = array_map("AccessArrayUseMap",$arr);
// print_r($arr);
echo "========== array_map ========= ";
print_r($arrMapRes);
// exit;
function AccessArrayUseWalk($arRec,$arrD){
    echo "value: ".$arRec."key: ".$arrD."<br>";
    return $arRec+5;
}
$arrWalkRes = array_walk($arr,"AccessArrayUseWalk");
echo "========== array_walk ========= ";
print_r($arr);
echo "return from walk :";
print_r($arrWalkRes);


$array = array(0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'red');

$key = array_search('blue', $array); // $key = 2;
var_dump($key); 
// $key = array_search('red', $array);   // $key = 1;


$fruit = array('a' => 'apple', 'b' => 'banana', 'c' => 'cranberry');

// reset($fruit);
// while (list($key, $val) = each($fruit)) {
//     echo "$key => $val\n";
// }
?>
