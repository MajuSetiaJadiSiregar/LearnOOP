<?php
    require_once "koneksi.php";
    $db = new Database();
    $data_barang = $db->tampil_data();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD-PHP-Native</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Barang</th>
            <th>Stock</th>
            <th>Harga Beli</th>
            <th>Harga Jual</th>
            <th>Action</th>
        </tr>

        <?php
            $no = 1;
            foreach($data_barang as $row){
                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $row['nama_barang']; ?></td>
                    <td><?php echo $row['stock']; ?></td>
                    <td><?php echo $row['harga_beli']; ?></td>
                    <td><?php echo $row['harga_jual']; ?></td>
                    <td>
                        <a href="#">Update</a>
                        <a href="#">Delete</a>
                    </td>
                </tr>
                <?php
            }
        ?>
    </table>
</body>
</html>