<?php
include 'header.php';
?>
        <div class="container" style="margin-top: 50px;">
            <h1>Data Pengguna</h1>
            <a href="tambah_pengguna.php" class="btn btn-info">Tambah Data</a>
            <hr>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">ID</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Username</th>
                    <th scope="col">Password</th>
                    <th width="200">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $nomor = 1;
                $pengguna = mysqli_query($connect, "select * from pengguna");
                while ($row=mysqli_fetch_array($pengguna)){

            ?>
                <tr>
                    <td><?php echo $nomor;?></td>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['nama'];?></td>
                    <td><?php echo $row['username'];?></td>
                    <td><?php echo $row['password'];?></td>
                    <td>
                        <a href="edit_pengguna.php?id=<?=$row['id'] ?>" class="btn btn-danger">Edit</a>
                        <a href="delete_pengguna.php?id=<?=$row['id'] ?>" class="btn btn-warning">Delete</a>
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



