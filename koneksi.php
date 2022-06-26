<?php

$conn = mysqli_connect("localhost", "root", "", "belajar");

if (mysqli_connect_errno()) {
    echo "Koneksi gagal" . mysqli_connect_error();
} else {
    echo "
    <script>
    console.log('Koneksi berhasil');
    </script>";
}
