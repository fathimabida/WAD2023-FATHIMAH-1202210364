<!-- Pada file ini kalian membuat coding untuk logika delete / menghapus data mobil pada showroom sesuai id-->
<?php 
// (1) Jangan lupa sertakan koneksi database dari yang sudah kalian buat yaa
include("navbar.php");
include("connect.php");

// (2) Tangkap nilai "id" mobil (CLUE: gunakan GET)
$id = $_GET['id'];

    // (3) Buatkan perintah SQL DELETE untuk menghapus data dari tabel berdasarkan id mobil
    $updatesql = mysqli_query($connect, "DELETE FROM showroom_mobil WHERE id = '$id'");
    header('Location:list_mobil.php');
    // (4) Buatkan perkondisi jika eksekusi query berhasil
    if ($updatesql) {
        echo "<script>alert('Data mobil berhasil dihapus!')</script>";
        echo "<meta http-equiv='refresh' content'1 url=list_mobil.php'>";
    } else {
        echo "<script>alert('Data mobil gagal dihapus!')</script>";
        echo "<meta http-equiv='refresh' content'1 url=list_mobil.php'>";
    }
// Tutup koneksi ke database setelah selesai menggunakan database
$connect -> close();
?>