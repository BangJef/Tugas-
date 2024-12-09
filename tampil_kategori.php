<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TampilKategori</title>
</head>
<body>
    <h2>Pemograman 3 2024</h2>
    <br>
    <a href="input_kategori.php">+ TAMBAH KATEGORI</a>
    <br><br>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama Kategori</th>
            
        </tr>
        <?php
        include 'koneksi.php';
        $no = 1;
        $data = mysqli_query ($koneksi, "select * from kategori");
        while ($d = mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['nama_kategori'];?></td>
                
                <td>
                    <a href="edit_kategori.php?id=<?php echo $d['id'];?>">EDIT</a>
                    <a href="hapus_kategori.php?id=<?php echo $d['id'];?>">HAPUS</a>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>
</body>
</html>