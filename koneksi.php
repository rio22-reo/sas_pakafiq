<?php
$conn = new mysqli("localhost", "root", "", "db_registrasi_sistem");

if($conn->connect_error) {
    die ("Koneksi gagal" . $conn->connect_error);
}
?>