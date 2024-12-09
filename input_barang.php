<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InputBarang</title>
</head>
<?php
//KoneksiDatabase
include 'koneksi.php';
//MenangkapDatayangDiKirimDariForm
if (!empty($_POST['save'])){
    $Nama_barang = $_POST['nama_barang'];
    $Kode_barang = $_POST['kode_barang'];
    $Qty = $_POST['qty'];
    $Kategori_id = $_POST['kategori_id'];
//MenginputDataKeDatabase
$a=mysqli_query($koneksi, "insert into barang values('','$Nama_barang','$Kode_barang','$Qty','$Kategori_id')");
if ($a){
    //MengalihkanHalamanKembali
    header("location:tampil_barang.php");
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
    <h3>TAMBAH DATA BARANG</h3>
    <form method="POST">
        <table>
            <tr>
                <td>Nama Barang</td>
                <td><input type="text" name="nama_barang"></td>
            </tr>
            <tr>
                <td>Kode barang</td>
                <td><input type="text" name="kode_barang"></td>
            </tr>
            <tr>
                <td>qty</td>
                <td><input type="number" name="qty"></td>
            </tr>
            <tr>
                <td>kategori</td>
                <td><select name="kategori_id" id="">
                    <option value="">---Pilih---</option>
                    <option value="1">ATK</option>
                    <option value="2">Electronic</option>
                    <option value="3">Sembako</option>
                </select></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="save"></td>
            </tr>
        </table>
    </form>
</body>
</html>