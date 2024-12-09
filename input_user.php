<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InputUser</title>
</head>
<?php
//KoneksiDatabase
include 'koneksi.php';
//MenangkapDatayangDiKirimDariForm
if (!empty($_POST['save'])){
    $Nama = $_POST['Nama'];
    $Password = $_POST['Password'];
    $Level = $_POST['level'];
    $Status = $_POST['status'];
//MenginputDataKeDatabase
$a=mysqli_query($koneksi, "insert into user values('','$Nama','$Password','$Level','$Status')");
if ($a){
    //MengalihkanHalamanKembali
    header("location:tampil_user.php");
}else{
    echo mysqli_error();
}
}
?>
<body>
    <h2>Pemograman 3 2024</h2>
    <br>
    <a href="index.php">KEMBALI</a>
    <br>
    <br>
    <h3>TAMBAH DATA USER</h3>
    <form method="POST">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="Nama"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="number" name="Password"></td>
            </tr>
            <tr>
                <td>Level</td>
                <td><select name="level">
                    <option value="">-----Pilih</option>
                    <option value="1">gold</option>
                    <option value="2">silver</option>
                    <option value="3">platinum</option>
                </select>
                </td>
            </tr>
            <tr>
                <td>Status</td>
                <td><select name="status">
                    <option value="">-----Pilih</option>
                    <option value="1">Aktif</option>
                    <option value="0">Tdk Aktif</option>
                </select>
            </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="save"></td>
            </tr>
        </table>
    </form>
</body>
</html>