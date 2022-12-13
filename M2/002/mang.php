<?php
    $books = ['Van','Su','Dia'];
    //          0     1    2

   

    // Truy cap phan tu dua vao chi so
    // echo '<br>'.$books[0];
    // echo '<br>'.$books[1];
    // echo '<br>'.$books[2];

    // Do dai cua mang
    echo count( $books );//3

    // Them phan tu vao mang
    array_push( $books, 'Hoa' );


    //  Khai bao cach 2
    $books = [
        0 => 'Van',
        1 => 'Su',
        2 => 'Dia'
    ];

    // Mang lien ket
    $books = [
        'khong' => 'Van',
        'mot'   => 'Su',
        'hai'   => 'Dia'
    ];

    echo '<br>'.$books['khong'];
    echo '<br>'.$books['mot'];
    echo '<br>'.$books['hai'];

    $info = [
        'ten' => 'NVA',
        'tuoi' => 18
    ];
    $info['gioi_tinh'] = 'Nam';
    
    // In mang
    echo '<pre>';
    print_r($info);
    echo '</pre>';

    // Duyet mang
    foreach( $info as $key => $value ){
        echo '<br>'.$key.' - '. $value;
    }
    foreach( $info as $value ){
        echo '<br>'.$value;
    }
