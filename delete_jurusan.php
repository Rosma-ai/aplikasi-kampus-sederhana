<?php
//membaca parameter yang akan digunakan untuk mendelete data 
$jurusan_id = $_GET['jurusan_id'];
//memanggil koneksi ke database
include('koneksi.php');
//query untuk menghapus data
$delete = mysqli_query($connect,"delete from tb_jurusan where jurusan_id='$jurusan_id'");
// cek status apakah berhasil atau gagal
if ($delete){
    $status = "berhasil";
} else{
    $status = "gagal";
}
//redirect ke halaman index
header("location:list_jurusan.php?status".$status);
?>