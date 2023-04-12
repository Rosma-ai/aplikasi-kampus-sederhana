<?php
// membuat variabel dan menyimpan inputan
$jurusan_id          = $_POST['jurusan_id'];
$nama_jurusan         = $_POST['nama_jurusan'];

//memanggil koneksi
include ('koneksi.php');
//query untuk insert ke dalam tabel mahasisa
$query = "UPDATE tb_jurusan SET nama_jurusan='$nama_jurusan' WHERE jurusan_id='$jurusan_id'";
//echo $query;
//exit;
$insert = mysqli_query($connect,$query);
// cek status apakah berhasil atau gagal
if ($insert){
    $status = "berhasil";
} else{
    $status = "gagal";
}
header("location:list_jurusan.php?status".$status);

?>
