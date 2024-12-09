<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InputTransaksi</title>
</head>
<?php
//KoneksiDatabase
include 'koneksi.php';
//MenangkapDatayangDiKirimDariForm
if (!empty($_POST['save'])){
    $Tgl_transaksi = $_POST['tgl_transaksi'];
    $No_transaksi = $_POST['no_transaksi'];
    $Jenis_transaksi = $_POST['jenis_transaksi'];
    $Barang_id = $_POST['barang_id'];
    $Jumlah_transaksi = $_POST['jumlah_transaksi'];
    $User_id = $_POST['user_id'];
    $Total_transaksi  = $_POST['total_transaksi'];
//MenginputDataKeDatabase
$a=mysqli_query($koneksi, "insert into transaksi values('','$Tgl_transaksi','$No_transaksi','$Jenis_transaksi','$Barang_id','$Jumlah_transaksi','$User_id','$Total_transaksi')");
if ($a){
    //MengalihkanHalamanKembali
    header("location:tampil_hasil_transaksi.php");
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
    <h3>TAMBAH DATA TRANSAKSI</h3>
    <form method="POST">
        <table>
            <tr>
                <td>tgl_transaksi</td>
                <td><input type="date" name="tgl_transaksi"></td>
            </tr>
            <tr>
                <td>no_transaksi</td>
                <td><input type="number" name="no_transaksi"></td>
            </tr>
            <tr>
                <td>jenis_transaksi</td>
                <td><select name="jenis_transaksi">
                    <option value="">-----Pilih</option>
                    <option value="1">cas</option>
                    <option value="2">debit</option>
                </select>
            </td>
            </tr>
            <tr>
                <td>barang_id</td>
                <td><select name="barang_id">
                    <option value="">-----Pilih</option>
                    <option value="12">dispenser</option>
                </select>
                </td>
            </tr>
            <tr>
                <td>jumlah_transaksi</td>
                <td><input type="text" name="jumlah_transaksi"></td>
            </tr>
            <tr>
                <td>user_id</td>
                <td><select name="user_id">
                    <option value="">-----Pilih</option>
                    <option value="5">Raysha</option>
                </select>
                </td>
            </tr>
            <tr>
                <td>total_transaksi</td>
                <td><input type="text" name="total_transaksi"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="save"></td>
            </tr>
        </table>
    </form>
</body>
</html>