<?php
require 'koneksi.php';

$id = $_GET["id"];

mysqli_query($conn, "DELETE FROM buku WHERE id = $id");

if (mysqli_affected_rows($conn)) {
    echo "
    <script>
    alert('Data berhasil dihapus');
    document.location.href = 'index.php';
    </script>
    ";
} else {
    echo "Data Gagal dihapus";
}
