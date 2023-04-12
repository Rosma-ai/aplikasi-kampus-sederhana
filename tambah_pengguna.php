<?php include 'header.php';?>
<div class="container" style="margin-top: 50px;">
<h3>Input Data Pengguna</h3>
<form action="simpan_pengguna.php" method="post">
<table class="table table-borderd">
            <tr>
                <td>ID</td>
                <td><input name="id" type="text" placeholder="ID" class="form-control"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input name="nama" type="text" placeholder="Nama" class="form-control"></td>
            </tr>
            <tr>
              <td>Username</td>
              <td><input name="username"type="text" placeholder="username" class="form-control"></td>
          </tr>
          <tr>
            <td>Passsword</td>
            <td><input name="password" type="password" placeholder="password" class="form-control"></td>
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
<?php include 'footer.php'?>
