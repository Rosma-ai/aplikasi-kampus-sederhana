<?php
include 'header.php';
?>
        <div class="container" style="margin-top: 50px;">
            <h1>Data Jurusan</h1>
            <a href="tambah_jurusan.php" class="btn btn-info">Tambah Jurusan</a>
            <hr>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Jurusan ID</th>
                    <th scope="col">Nama Jurusan</th>
                    <th width="200">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $nomor = 1;
                $tb_jurusan = mysqli_query($connect, "select * from tb_jurusan");
                while ($row=mysqli_fetch_array($tb_jurusan)){

            ?>
                <tr>
                    <td><?php echo $nomor;?></td>
                    <td><?php echo $row['jurusan_id'];?></td>
                    <td><?php echo $row['nama_jurusan'];?></td>
                    <td>
                        <a href="edit_jurusan.php?jurusan_id=<?=$row['jurusan_id'] ?>" class="btn btn-danger">Edit</a>
                        <a href="delete_jurusan.php?jurusan_id=<?=$row['jurusan_id'] ?>" class="btn btn-warning">Delete</a>
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



