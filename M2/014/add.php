<?php
    include_once 'db.php';//$conn

    //Xu ly form
    if( $_SERVER['REQUEST_METHOD'] == "POST" ){
        // in du lieu nguoi dung gui len
        // echo '<pre>';
        // print_r( $_REQUEST );
        // die();

        // Gan vao bien
        $TENHANG = $_REQUEST['TENHANG'];
        $MACONGTY = $_REQUEST['MACONGTY'];
        $MALOAIHANG = $_REQUEST['MALOAIHANG'];
        $GIAHANG = $_REQUEST['GIAHANG'];

        // Viet cau truy van
        $sql = "INSERT INTO c10_mat_hang(TENHANG,MACONGTY,MALOAIHANG,GIAHANG)
        VALUES ('$TENHANG',$MACONGTY,$MALOAIHANG,$GIAHANG)";
        // Debug sql
        // var_dump($sql);
        // die();
        
        //Thuc hien truy van
        $conn->exec($sql);

        // chuyen huong ve trang danh sach
        header("Location: list.php");
    } 
?>
<form action="" method="post">
    TENHANG :<input type="text" name="TENHANG"> <br>
    MACONGTY: <input type="text" name="MACONGTY"> <br>
    MALOAIHANG: <input type="text" name="MALOAIHANG"> <br>
    GIAHANG: <input type="text" name="GIAHANG"> <br>
    <input type="submit" value="Them">
</form>
