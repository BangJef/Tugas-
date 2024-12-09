<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TampilHasilTransaksi</title>
</head>
<body>
    <h2>Pemograman 3 2024</h2>
    <br>
    <a href="catat_transaksi.php">+ TRANSAKSI KEMBALI</a>
    <br><br>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Member</th>
            <th>Level</th>
            <th>Diskon Member</th>
            <th>Diskon Barang</th>
            <th>Total Pembelian</th>
            <!-- <th>Total Diskon</th> -->
            <th>Total transaksi</th>
        </tr>
        <?php
        include 'koneksi.php';
        $no = 1;
        $data = mysqli_query ($koneksi, "select * from catat_transaksi");
        $data = mysqli_query ($koneksi, "select * from diskon");
        $data = mysqli_query ($koneksi, "select * from user");
        while ($d = mysqli_fetch_array($data,)){
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['nama'];?></td>
                <td><?php echo $d['level_member'];?></td>
                <td><?php echo $d[''];?></td>
                <td><?php echo $d['barang_id'];?></td>
                <td><?php echo $d['total_transaksi'];?></td>
                <!-- <td> -->
                    <!-- <a href="edit_barang.php?id=">EDIT</a> -->
                    <!-- <a href="hapus_barang.php?id=">HAPUS</a> -->
                <!-- </td> -->
            </tr>
            <?php
        }
        ?>
    </table>
</body>
</html>