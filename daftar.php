<?php
include 'koneksi.php';

if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query ="INSERT INTO tb_users (username, email, password) VALUES ('$username', '$email', '$password')";
    $hasil = mysqli_query($conn, $query);

    if($hasil) {
        echo "Berhasil Daftar";
    } else {
        echo "Gagal Daftar" . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PPDB SMKN 4 PALEMBANG</title>
</head>
<body>
    <h2>Pendaftaran</h2>
    <form method="post">
        <input type="text" name="username" placeholder="Username" required><br><br>
        <input type="email" name="email" placeholder="Email" required><br><br>
        <input type="password" name="password" placeholder="Password" required><br><br>
        <button type="submit" name="submit">Daftar</button>
    </form>
</body>
</html>