<?php include 'header.php';
//menangkap parameter nim dari URL
$nim = $_GET["nim"];
$query = mysqli_query($connect,"select * from mahasiswa where nim='$nim'");
$mahasiswa = mysqli_fetch_array($query);
//print_r($mahasiswa);
?>
<div class="container" style="margin-top: 50px;">
<h3>Update Data Mahasiswa</h3>
<form action="update_mahasiswa.php" method="post">
        <table class="table table-borderd">
            <tr>
                <td>NIM</td>
                <td><input name="nim" type="text" value="<?php echo $mahasiswa['nim']?>" placeholder="NIM" class="form-control"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input name="nama" type="text" value="<?php echo $mahasiswa['nama']?>" placeholder="Nama" class="form-control"></td>
            </tr>
            <tr>
              <td>Email</td>
              <td><input name="email" type="text" value="<?php echo $mahasiswa['email']?>" placeholder="Email" class="form-control"></td>
          </tr>
          <tr>
            <td>Nomor HP</td>
            <td><input name="nomor_hp" type="text" value="<?php echo $mahasiswa['nomor_hp']?>" placeholder="Nomor HP" class="form-control"></td>
        </tr>
            <tr>
                <td>Jurusan</td>
                <td><select name="id_jurusan" class="form-control">
                <?php
                $tb_jurusan = mysqli_query($connect,"select * from tb_jurusan");
                while($jrs = mysqli_fetch_array($tb_jurusan)){
                echo "<option value='".$jrs['jurusan_id']."' ";
                echo $jrs['jurusan_id']==$mahasiswa['id_jurusan']?"selected":"";
                echo ">".$jrs['nama_jurusan']."</option>";
                }
                ?>
            </select>
        
                    <option>Teknik Informatika</option>
                    <option>Teknik Mesin</option>
                </select></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td><input type="date" name="tanggal_lahir" value="<?php echo $mahasiswa['tanggal_lahir']?>"placeholder="Tanggal Lahir" class="form-control"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td><select name="jenis_kelamin" value="<?php echo $mahasiswa['jenis_kelami']?>" placeholder="Jenis Kelamin" class="form-control">
                <option value="L">Laki Laki</option>
                <option value="P">Perempuan</option>
                </select></td>
            </tr>
            <tr>
                <td>Sudah Lulus</td>
                <td><select name="sudah_lulus" value="<?php echo $mahasiswa['sudah_lulus']?>" placeholder="Sudah Lulus" class="form-control">
                <option value="1">Ya</option>
                <option value="0">Tidak</option>
                </select></td>
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

<?php include 'footer.php';?>