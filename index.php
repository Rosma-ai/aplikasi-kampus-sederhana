<?php
include 'header.php';
?>
        <div class="container" style="margin-top: 50px;">
            <h1>Data Mahasiswa</h1>
            <a href="tambah_mahasiswa.php" class="btn btn-info">Tambah Data</a>
            <hr>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">NIM</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Nomor HP</th>
                    <th scope="col">Jurusan</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Sudah Lulus</th>
                    <th scope="col">Nama Dosen</th>
                    <th width="200">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $nomor = 1;
                $mahasiswa = mysqli_query($connect, "SELECT m.*,j.nama_jurusan,d.nama_dosen 
                FROM mahasiswa AS m JOIN tb_jurusan AS j on m.id_jurusan=j.jurusan_id 
                JOIN dosen AS d on m.dosen_pembimbing_id=d.id_dosen");
                while ($row=mysqli_fetch_array($mahasiswa)){

            ?>
                <tr>
                    <td><?php echo $nomor;?></td>
                    <td><?php echo $row['nim'];?></td>
                    <td><?php echo $row['nama'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['nomor_hp'];?></td>
                    <td><?php echo $row['nama_jurusan'];?></td>
                    <td><?php echo $row['tanggal_lahir'];?></td>
                    <td><?php echo $row['jenis_kelamin']=='L'?'Laki-laki':'Perempuan'?></td>
                    <td><?php echo $row['sudah_lulus']==1?'Ya':'Tidak'?></td>
                    <td><?php echo $row['nama_dosen'];?></td>
                    <td>
                        <a href="edit_mahasiswa.php?nim=<?=$row['nim'] ?>" class="btn btn-danger">Edit</a>
                        <a href="delete_mahasiswa.php?nim=<?=$row['nim'] ?>" class="btn btn-warning">Delete</a>
                    </td>
                </tr>
                <?php
                $nomor++;
                } ?>
                </tbody>
            </table>
                </tr>
            </table>

            </div>

<?php
include 'footer.php';
?>



