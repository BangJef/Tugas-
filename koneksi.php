<?php
$koneksi = mysqli_connect ("localhost","root","","smstr2");
//Check connection
if (mysqli_connect_errno()){
    echo "koneksi database gagal : " . mysqli_connect_error();
}else {
        echo"Hore bisa konek";
    }
?>