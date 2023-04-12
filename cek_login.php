<?php
//menyimpan hasil inputan veriabel
$usernameTxt = $_POST['username'];
$passwordTxt = $_POST['password'];
//memanggil koneksi
include 'koneksi.php';
//melakukan query untuk pengecekan data
$pengguna = mysqli_query($connect,"SELECT * FROM pengguna Where username='$usernameTxt'
AND password='$passwordTxt'");

$chek = mysqli_num_rows($pengguna);

if($chek>0){

    session_start();
    $penggunaRow = mysqli_fetch_array($pengguna);
    $_SESSION['username'] = $penggunaRow['username'];
    $_SESSION['nama'] = $penggunaRow['nama'];
    header("location:index.php");
}else{
    header("location:login.php");
}


?>