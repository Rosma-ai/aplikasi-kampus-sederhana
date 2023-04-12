<?php include 'header.php';?>
<div class="container" style="margin-top: 50px;">
<h3>Input Jurusan</h3>
<form action="simpan_jurusan.php" method="post">
<table class="table table-borderd">
            <tr>
                <td>Jurusan ID</td>
                <td><input name="jurusan_id" type="text" placeholder="Jurusan ID" class="form-control"></td>
            </tr>
            <tr>
                <td>Nama Jurusan</td>
                <td><input name="nama_jurusan" type="text" placeholder="Nama Jurusan" class="form-control"></td>
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
<?php include 'footer.php'?>
