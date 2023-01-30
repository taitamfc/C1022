<a href="add.php"> Thêm mới </a>
<table border="1">
    <thead>
        <tr>
            <th>MAHANG</th>
            <th>TENHANG</th>
            <th>GIAHANG</th>
            <th>TENLOAIHANG</th>
            <th>ACTION</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach( $items as $row ): 
            // echo '<pre>';
            // print_r($row);
            // die();
            ?>
            <tr>
                <td> <?php echo $row['MAHANG'];?> </td>
                <td><?php echo $row['TENHANG'];?></td>
                <td><?php echo $row['GIAHANG'];?></td>
                <td><?php echo $row['MALOAIHANG'];?></td>
                <td>
                    <a href="index.php?controller=product&action=edit&id=<?= $row['MAHANG'] ;?>">Edit</a> <br>
                    <a href="index.php?controller=product&action=destroy&id=<?= $row['MAHANG'] ;?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>