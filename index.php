<?php
require 'koneksi.php';

$result = mysqli_query($conn, "SELECT * FROM buku");


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku</title>
    <!-- link bootstrap css -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>

<body>
    <!-- header -->
    <nav class="navbar navbar-dark bg-primary ">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTQtDnceY0jACTVFGCiLaKcr9xSuL7LaeE6dQ&usqp=CAU" alt="" width="30" height="24" class="d-inline-block align-text-top">
                Koleksi Buku
            </a>
        </div>
    </nav>
    <!-- end header -->

    <!-- table -->
    <form action="">
        <div class="container">
            <a href="tambah.php"><button type="button" class="btn btn-success btn-sm mt-2">Tambah</button></a>
            <button type="button" class="btn btn-danger btn-sm mt-2">Logout</button>
            <table class="table table-bordered text-center mt-2">
                <thead class="table-primary">
                    <tr>
                        <th>ID</th>
                        <th>Judul</th>
                        <th>Pengarang</th>
                        <th>Tahun</th>
                        <th>Kategori</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php while ($b = mysqli_fetch_assoc($result)) : ?>
                        <tr>
                            <td><?= $i++; ?></td>
                            <td><?= $b['judul']; ?></td>
                            <td><?= $b['pengarang']; ?></td>
                            <td><?= $b['tahun']; ?></td>
                            <td><?= $b['kategori']; ?></td>
                            <td>
                                <button type="button" class="btn btn-warning btn-sm">Edit</button>
                                <button type="button" class="btn btn-danger btn-sm">Hapus</button>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </form>
    <!-- emd table -->


    <!-- script bootstrap js -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>