<?php
    include_once 'db.php';//$conn
    // echo '<pre>';
    // print_r($_GET);
    // die();

    // Lay gia tri ID tren URL
    $id = $_GET['id'];

    // lay du lieu theo ID
    $sql = "SELECT * FROM `c10_mat_hang` WHERE MAHANG = $id";
    //debug sql
    // var_dump($sql);
    $stmt = $conn->query($sql);
    $stmt->setFetchMode(PDO::FETCH_ASSOC);//array 

    // Lay ve du lieu duy nhat
    $row = $stmt->fetch();
    // echo '<pre>';
    // print_r($row);
    // die();

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
        $sql = "UPDATE c10_mat_hang SET
                TENHANG = '$TENHANG',
                MACONGTY = $MACONGTY,
                MALOAIHANG = $MALOAIHANG,
                GIAHANG = $GIAHANG
                WHERE MAHANG = $id
        ";
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
    TENHANG :<input type="text" name="TENHANG" value="<?= $row['TENHANG'];?>"> <br>
    MACONGTY: <input type="text" name="MACONGTY" value="<?= $row['MACONGTY'];?>"> <br>
    MALOAIHANG: <input type="text" name="MALOAIHANG" value="<?= $row['MALOAIHANG'];?>"> <br>
    GIAHANG: <input type="text" name="GIAHANG" value="<?= $row['GIAHANG'];?>"> <br>
    <input type="submit" value="Them">
</form>

