<?php
//echo $add(3, 4);

$add = function($num1, $num2){
    return $num1 + $num2;
};

function add2($num1, $num2){
    $num1 = 45;
    return $num1 + $num2;
}

// function that uses a callback
function validate($data, $valfun){
    return $valfun($data);
}

validate(23, function($num){
    return $num  < 10;
});
$ad = [1,2,3];
print_r(array_map(function($nu){
    return ($nu * $nu);
}, $ad));


