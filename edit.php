<?php
require 'koneksi.php';

// menangkap data dari index berupa id yang dikirim menggunakan variabel globa $_get
$id = $_GET['id'];

// memetakan data untuk kebutuhan tampil dalam inputan
$result = mysqli_query($conn, "SELECT * FROM buku WHERE id = $id");
$b = mysqli_fetch_assoc($result);

if (isset($_POST['edit'])) {
    $judul = $_POST['judul'];
    $pengarang = $_POST['pengarang'];
    $tahun = $_POST['tahun'];
    $kategori = $_POST['kategori'];

    $query = "UPDATE buku SET judul = '$judul', pengarang = '$pengarang', tahun = '$tahun', kategori = '$kategori' WHERE id = $id";
    mysqli_query($conn, $query);

    if (mysqli_affected_rows($conn) > 0) {
        echo "
        <script>
        alert('Data berhasil diedit');
        document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "<script>
        alert('Data gagal diedit');
        document.location.href = 'index.php';
        </script>
        ";
    }
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

    <!-- costum css -->
    <link rel="stylesheet" href="bootstrap/style.css">
</head>

<body>
    <section class="container-fluid">
        <!-- justify-content-center untuk mengatur posisi form agar berada di tengah-tengah -->
        <section class="row justify-content-center">
            <section class="col-12 col-sm-6 col-md-4">
                <form class="form-container" action="" method="post">
                    <h4 class="text-center font-weight-bold"> edit Data Buku </h4>
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" class="form-control" id="judul" placeholder="Masukkan judul" name="judul" value="<?= $b['judul']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="pengarang">Pengarang</label>
                        <input type="text" class="form-control" id="pengarang" name="pengarang" placeholder="Masukkan pengarang" value="<?= $b['pengarang']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="tahun">Tahun</label>
                        <input type="text" class="form-control" id="tahun" name="tahun" placeholder="Masukkan tahun" value="<?= $b['tahun']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="kategori">Kategori</label>
                        <input type="text" class="form-control" name="kategori" id="kategori" placeholder="Masukkan kategori" value="<?= $b['kategori']; ?>">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block mt-2" name="edit">Edit</button>
                </form>
            </section>
        </section>
    </section>

    <!-- Bootstrap requirement jQuery pada posisi pertama, kemudian Popper.js, danyang terakhit Bootstrap JS -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>