<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TampilDiskon</title>
</head>
<body>
    <h2>Pemograman 3 2024</h2>
    <br>
    <a href="input_diskon.php">+ TAMBAH DISKON</a>
    <br><br>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Tipe Diskon</th>
            <th>Keterangan Diskon</th>
            <th>Besaran Diskon</th>
            
        </tr>
        <?php
        include 'koneksi.php';
        $no = 1;
        $data = mysqli_query ($koneksi, "select * from diskon");
        while ($d = mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['tipe_diskon'];?></td>
                <td><?php echo $d['keterangan_diskon'];?></td>
                <td><?php echo $d['besaran_diskon'];?></td>
                
                <td>
                    <a href="edit_diskon.php?id=<?php echo $d['id'];?>">EDIT</a>
                    <a href="hapus_diskon.php?id=<?php echo $d['id'];?>">HAPUS</a>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>
</body>
</html>