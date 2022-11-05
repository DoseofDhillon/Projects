<?php
add(3, 4);
function add($num1, $num2){
    $num1 = 45;
    return $num1 + $num2;
}

//echo  add(3, 5);

//function with optional parameter
//function add2($num1, $num2 = null){
//    if(!isset($num2)){
//        return $num1;
//    }
//    return $num1 + $num2;
//}
//echo add2(5);

//  function with default vlaue
function add2($num1, $num2 = 5, $num3=null){

    return $num1 + $num2;
}
//send by reference
function add3(&$num1, $num2){
    $num1 = 45;
    return $num1 + $num2;
}

$a = 23;
$b = 34;
echo add3($a, $b) . "<br />";
echo $a;