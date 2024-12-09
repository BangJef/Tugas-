<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TampilUser</title>
</head>
<body>
    <h2>Pemograman 3 2024</h2>
    <br>
    <a href="input_user.php">+ TAMBAH USER</a>
    <br><br>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Password</th>
            <th>Level</th>
            <th>Status</th>
            <th>OPSI</th>
        </tr>
        <?php
        include 'koneksi.php';
        $no = 1;
        $data = mysqli_query ($koneksi, "select * from user");
        while ($d = mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['nama'];?></td>
                <td><?php echo $d['password'];?></td>
                <td><?php echo $d['level_member'];?></td>
                <td><?php echo $d['status'];?></td>
                <td>
                    <a href="edit_user.php?id=<?php echo $d['id'];?>">EDIT</a>
                    <a href="hapus_user.php?id=<?php echo $d['id'];?>">HAPUS</a>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>
</body>
</html>