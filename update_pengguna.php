<?php
// membuat variabel dan menyimpan inputan
$id           = $_POST['id'];
$nama          = $_POST['nama'];
$usernameTxt      = $_POST['username'];
$passwordTxt    = $_POST['password '];

//query untuk insert ke tabel mahasiswa
include ('koneksi.php');

$query = "UPDATE pengguna SET nama='$nama',username='$usernameTxt',password ='$passwordTxt'
where id='$id'";
//echo $query;
//exit;
$update = mysqli_query($connect,$query);
// cek status apakah berhasil atau gagal
if ($update){
    $status = "berhasil";
} else{
    $status = "gagal";
}
header("location:list_pengguna.php?status".$status);

?>
