<?php
    /*
    $_SERVER;
    $_REQUEST;
    $_POST;
    $_GET;
    */
    // echo '<pre>';
    // print_r($_SERVER['REQUEST_METHOD']);
    // echo '</pre>';

    // Kiem tra nguoi dung gui du lieu len
    if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
        // Kiem tra du lieu duoc gui len
        echo '<pre>';
        print_r($_REQUEST);
        echo '</pre>';
        // Memory
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];

        // Kiem tra du lieu duoc luu vao bo nho
        var_dump($username);
        var_dump($password);

        // Xu ly
        if( $username == 'admin' && $password == '123' ){
            // Xuat
            echo 'Xin chao admin';
        }else{
            // Xuat
            echo 'Chao ban da dang nhap he thong';
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        Username: <input type="text" name="username" value=""> <br>
        Password: <input type="password" name="password" value=""> <br>
        <button type="submit">Gui</button>
    </form>
</body>
</html>