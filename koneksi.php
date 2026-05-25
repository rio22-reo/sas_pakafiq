<?php
$conn = new mysqli("localhost", "root", "", "sas_pakafiq");

if($conn->connect_error) {
    die ("Koneksi gagal" . $conn->connect_error);
}
?>