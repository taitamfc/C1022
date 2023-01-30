<form action="index.php?controller=product&action=update&id=<?= $item['MAHANG'];?>" method="post">
    TENHANG :<input type="text" name="TENHANG" value="<?= $item['TENHANG'];?>"> <br>
    MACONGTY: <input type="text" name="MACONGTY" value="<?= $item['MACONGTY'];?>"> <br>
    MALOAIHANG: <input type="text" name="MALOAIHANG" value="<?= $item['MALOAIHANG'];?>"> <br>
    GIAHANG: <input type="text" name="GIAHANG" value="<?= $item['GIAHANG'];?>"> <br>
    <input type="submit" value="Them">
</form>