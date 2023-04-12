<?php
//membaca parameter yang akan digunakan untuk mendelete data 
$id = $_GET['id'];
//memanggil koneksi ke database
include('koneksi.php');
//query untuk menghapus data
$delete = mysqli_query($connect,"delete from pengguna where id='$id'");
// cek status apakah berhasil atau gagal
if ($delete){
    $status = "berhasil";
} else{
    $status = "gagal";
}
//redirect ke halaman index
header("location:list_pengguna.php?status".$status);
?>