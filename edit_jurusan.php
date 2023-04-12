<?php include 'header.php';
//menangkap parameter nim dari URL
$jurusan_id = $_GET["jurusan_id"];
$query = mysqli_query($connect,"select * from tb_jurusan where jurusan_id='$jurusan_id'");
$tb_jurusan = mysqli_fetch_array($query);
//print_r($mahasiswa);
?>
<div class="container" style="margin-top: 50px;">
<h3>Update Jurusan</h3>
<form action="update_jurusan.php" method="post">
        <table class="table table-borderd">
            <tr>
                <td>Jurusan ID</td>
                <td><input name="jurusan_id" type="text" value="<?php echo $tb_jurusan['jurusan_id']?>" placeholder="Jurusan ID" class="form-control"></td>
            </tr>
            <tr>
                <td>Nama Jurusan</td>
                <td><input name="nama_jurusan" type="text" value="<?php echo $tb_jurusan['nama_jurusan']?>" placeholder="Nama Jurusan" class="form-control"></td>
            </tr>
            <tr>
                <td></td>
                <td><button type="submit" class="btn btn-success">Simpan Data</button>
                <a href="list_jurusan.php" class="btn btn-primary">Kembali</a>
                </td>
            </tr>
        </table>
</form>
</div>

<?php include 'footer.php';?>