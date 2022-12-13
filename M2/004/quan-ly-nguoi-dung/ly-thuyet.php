<?php
    //JSON
    //Javascript Object
    // Doc noi dung tu file
    $string = file_get_contents('users.json');
    
    // Chuyen chuoi sang mang
    $data = json_decode($string,true);

    //tao phan tu moi
    $newItem = [
        'name' => 'Tam',
        'age'  => 20
    ];
    // Them phan tu vao mang
    array_push( $data,$newItem  );

    // Chuyen tu mang sang chuoi
    $string = json_encode($data);

    //luu vao file
    file_put_contents( 'users.json', $string);

    // echo $string;
    // var_dump($data);

    echo '<pre>';
    print_r($data);
    die();

