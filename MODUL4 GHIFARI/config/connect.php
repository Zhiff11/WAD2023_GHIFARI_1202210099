<!-- File ini berisi koneksi dengan database MySQL -->
<?php 

// (1) Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin
$server = 'localhost';
$user = 'root';
$pass = '';
$database = 'modul4';

$con = mysqli_connect($server, $user, $pass, $database);
// 

// (2) Buatlah perkondisian untuk menampilkan pesan error ketika database gagal terkoneksi
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// 

?>