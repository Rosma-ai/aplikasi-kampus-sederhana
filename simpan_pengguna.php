<?php
// membuat variabel dan menyimpan inputan
$nama          = $_POST['nama'];
$usernameTxt       = $_POST['username'];
$passwordTxt    = md5($_POST['password']);

//query untuk insert ke tabel mahasiswa
include ('koneksi.php');

$query = "INSERT INTO pengguna (nama,username,password) VALUES ('$nama','$usernameTxt','$passwordTxt')";
//echo $query;
//exit;
$insert = mysqli_query($connect,$query);
// cek status apakah berhasil atau gagal
if ($insert){
    $status = "berhasil";
} else{
    $status = "gagal";
}
header("location:list_pengguna.php?status".$status);

?>