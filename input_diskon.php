<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InputDiskon</title>
</head>
<?php
//KoneksiDatabase
include 'koneksi.php';
//MenangkapDatayangDiKirimDariForm
if (!empty($_POST['save'])){
    $tipe_diskon = $_POST['tipe_diskon'];
    $keterangan_diskon = $_POST['keterangan_diskon'];
    $besaran_diskon = $_POST['besaran_diskon'];
    
//MenginputDataKeDatabase
$a=mysqli_query($koneksi, "insert into diskon values('','$tipe_diskon','$keterangan_diskon','$besaran_diskon')");
if ($a){
    //MengalihkanHalamanKembali
    header("location:tampil_diskon.php");
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
    <h3>TAMBAH DATA DISKON</h3>
    <form method="POST">
        <table>
            <tr>
                <td>Tipe Diskon</td>
                <td><input type="text" name="tipe_diskon"></td>
            </tr>
            <tr>
                <td>Keterangan Diskon</td>
                <td><input type="text" name="keterangan_diskon"></td>
            </tr>
            <tr>
                <td>Besaran Diskon</td>
                <td><input type="text" name="besaran_diskon"></td>
            </tr>
            
            <tr>
                <td></td>
                <td><input type="submit" name="save"></td>
            </tr>
        </table>
    </form>
</body>
</html>