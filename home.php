<?php
session_start();
if(isset($_SESSION['username'])&&isset($_SESSION['level'])){
}else{
    echo("<script type='text/javascript'>alert('Anda harus login');document.location='index.php';</script>");
}
?>
<?php if($_SESSION['level']=='admin'){?>
    <center><a href="tampil_mahasiswa.php">Menu Mahasiswa</a></center>
    <center><a href="admin.php">Menu Admin</a></center>
    <center><a href="dosen.php">Menu Dosen</a></center>
    <?php
}else{?>
<center><a href="mahasiswa.php">Menu Mahasiswa</a></center>
<?php
}
?>