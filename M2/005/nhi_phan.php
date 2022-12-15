<?php
    $numbers = [2,5,8,12,16,23,38,56,72,91];

    $L = 0;
    $R = count($numbers) - 1;
    $find = 23;

    while( $L <= $R ){
        $M = floor( ( $L + $R ) / 2 );
        if( $numbers[$M] < $find ){
            $L = $M + 1;
        }elseif( $numbers[$M] > $find ){
            $R = $M - 1;
        }else{
            echo 'Tim thay '.$find.' tai '.$M;
            break;
        }
    }