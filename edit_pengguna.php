<?php include 'header.php';
//menangkap parameter nim dari URL
$id = $_GET["id"];
$query = mysqli_query($connect,"select * from pengguna where id='$id'");
$pengguna = mysqli_fetch_array($query);
//print_r($mahasiswa);
?>
<div class="container" style="margin-top: 50px;">
<h3>Input Data Pengguna</h3>
<form action="update_pengguna.php" method="post">
        <table class="table table-borderd">
            <tr>
                <td>ID</td>
                <td><input name="id" type="text" value="<?php echo $pengguna['id']?>" placeholder="ID" class="form-control"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input name="nama" type="text" value="<?php echo $pengguna['nama']?>" placeholder="Nama" class="form-control"></td>
            </tr>
            <tr>
                <td>Username</td>
                <td><input name="username" type="text" value="<?php echo $pengguna['username']?>" placeholder="Username" class="form-control"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input name="password" type="password" value="<?php echo $pengguna['password']?>" placeholder="Password" class="form-control"></td>
            </tr>
            <tr>
                <td></td>
                <td><button type="submit" class="btn btn-success">Simpan Data</button>
                <a href="list_pengguna.php" class="btn btn-primary">Kembali</a>
                </td>
            </tr>
        </table>
</form>
</div>

<?php include 'footer.php';?>