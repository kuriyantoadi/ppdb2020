<?php
$koneksi = mysqli_connect("localhost", "root", "", "ppdb-1.0");

// Check connection
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}