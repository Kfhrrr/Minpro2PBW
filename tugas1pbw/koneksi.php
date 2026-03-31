<?php
$conn = mysqli_connect("localhost", "root", "", "porto");

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>