<!-- File ini berisi koneksi dengan database MySQL -->
<?php 

// (1) Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin
$db = mysqli_connect('127.0.0.1', 'root', '', 'dbmodul4');
// 

// (2) Buatlah perkondisian untuk menampilkan pesan error ketika database gagal terkoneksi
if (!$db) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
// 
 
?>