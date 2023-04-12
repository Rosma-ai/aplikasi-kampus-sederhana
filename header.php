<?php
session_start();
//pastikan sudah login dengan mengecek value dari session
if(empty($_SESSION['username'])) {
  header("location:cek_login.php");
}
include "koneksi.php"
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    

		<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
			<div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-3 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="index.php">Data Mahasiswa</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="list_jurusan.php">Data Jurusan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="list_pengguna.php">Data Pengguna</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="#">Selamat Datang : <?php echo $_SESSION['nama']?></a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="logout.php">logout</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>