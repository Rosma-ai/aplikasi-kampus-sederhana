<?php include 'header.php';?>
<div class="container" style="margin-top: 50px;">
<h3>Input Data Mahasiswa</h3>
<form action="simpan_mahasiswa.php" method="post">
<table class="table table-borderd">
            <tr>
                <td>NIM</td>
                <td><input name="nim" type="text" placeholder="NIM" class="form-control"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input name="nama" type="text" placeholder="Nama" class="form-control"></td>
            </tr>
            <tr>
              <td>Email</td>
              <td><input name="email" type="text" placeholder="Email" class="form-control"></td>
          </tr>
          <tr>
            <td>Nomor HP</td>
            <td><input name="nomor_hp" type="text" placeholder="Nomor HP" class="form-control"></td>
        </tr>
            <tr>
                <td>JURUSAN</td>
                <td><select name="jurusan_id" class="form-control">
                  <?php 
                  $tb_jurusan = mysqli_query($connect,"SELECT * FROM jurusan");
                  while($jrs = mysqli_fetch_array($tb_jurusan)){
                    echo "<option value='".$jrs['jurusan_id']."'>".$jrs['nama_jurusan']."</option>";
                  }
                  ?>
                    <option>Teknik Informatika</option>
                    <option>Teknik Mesin</option>
                </select></td>
            </tr>
            <tr>
          <td>Tanggal Lahir</td>
          <td>
            <input type="date" name="tanggal_lahir" placeholder="Tanggal Lahir" class="form-control">
          </td>
        </tr>
        <tr>
          <td>Jenis Kelamin</td>
          <td>
            <select name="jenis_kelamin" class="form-control">
              <option value="L">Laki Laki</option>
              <option value="P">Perempuan</option>
            </select>
          </td>
        </tr>
        <tr>
          <td>Sudah Lulus</td>
          <td>
            <select name="sudah_lulus" class="form-control">
              <option value="1">Ya</option>
              <option value="0">Tidak</option>
            </select>
          </td>
        </tr>
            <tr>
                <td></td>
                <td><button type="submit" class="btn btn-success">Simpan Data</button>
                <a href="index.php" class="btn btn-primary">Kembali</a>
                </td>
            </tr>
        </table>
        </form>
</div>
<?php include 'footer.php'?>
