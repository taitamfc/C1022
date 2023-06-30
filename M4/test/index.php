<?php


// Phan mem tinh tong
function tinh_tong($a,$b){
    $c = $a + $b;
    return $c;
}

// Viet kiem thu truoc
//Case 1
$a = 7;
$b = 3;
$your_output = tinh_tong($a,$b);
$expect_output = 10;
if( $your_output == $expect_output){
    echo 'true';
}else{
    echo 'false';
}

//Case 2
$a = '7';
$b = 3;
$your_output = tinh_tong(5);
$expect_output = 10;
if( $your_output === $expect_output){
    echo 'true';
}else{
    echo 'false';
}



