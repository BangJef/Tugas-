<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InputKategori</title>
</head>
<?php
//KoneksiDatabase
include 'koneksi.php';
//MenangkapDatayangDiKirimDariForm
if (!empty($_POST['save'])){
    $nama_kategori = $_POST['nama_kategori'];
    
//MenginputDataKeDatabase
$a=mysqli_query($koneksi, "insert into kategori values('','$nama_kategori')");
if ($a){
    //MengalihkanHalamanKembali
    header("location:tampil_kategori.php");
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
    <h3>TAMBAH DATA KATEGORI</h3>
    <form method="POST">
        <table>
            <tr>
                <td>Kategori</td>
                <td><input type="text" name="nama_kategori"></td>
            </tr>
            
            <tr>
                <td></td>
                <td><input type="submit" name="save"></td>
            </tr>
        </table>
    </form>
</body>
</html>