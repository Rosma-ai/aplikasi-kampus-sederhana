<?php
// membuat variabel dan menyimpan inputan
$nim           = $_POST['nim'];
$nama          = $_POST['nama'];
$email         = $_POST['email'];
$nomor_hp      = $_POST['nomor_hp'];
$id_jurusan       = $_POST['id_jurusan'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$sudah_lulus   = $_POST['sudah_lulus'];

//query untuk insert ke tabel mahasiswa
include ('koneksi.php');

$query = "UPDATE mahasiswa SET nama='$nama',email='$email',nomor_hp='$nomor_hp',
id_jurusan='$id_jurusan',tanggal_lahir='$tanggal_lahir',jenis_kelamin='$jenis_kelamin',
sudah_lulus='$sudah_lulus'
where nim='$nim'";
//echo $id_jurusan;
//exit;
//echo $query;
//exit;
$update = mysqli_query($connect,$query);
// cek status apakah berhasil atau gagal
if ($update){
    $status = "berhasil";
} else{
    $status = "gagal";
}
header("location:index.php?status".$status);

?>
