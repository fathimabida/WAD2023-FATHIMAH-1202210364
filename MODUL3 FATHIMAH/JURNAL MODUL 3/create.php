<!-- Pada file ini kalian membuat coding untuk logika create / menambahkan mobil pada showroom -->

<?php
// (1) Jangan lupa sertakan koneksi database dari yang sudah kalian buat yaa

include("connect.php");

// (2) Buatlah perkondisian untuk memeriksa apakah permintaan saat ini menggunakan metode POST

if ($_SERVER['REQUEST_METHOD'] == "POST") {

// (3) Jika sudah coba deh kalian ambil data dari form (CLUE : pakai POST)

    // a. Ambil data nama mobil

    // b. Ambil data brand mobil

    // c. Ambil data warna mobil

    // d. Ambil data tipe mobil

    // e. Ambil data harga mobil
    $id = $_GET['id'];
    $namaMobil = $_POST['nama_mobil'];
    $brandMobil = $_POST['brand_mobil'];
    $warnaMobil = $_POST['warna_mobil'];
    $tipeMobil = $_POST['tipe_mobil'];
    $hargaMobil = $_POST['harga_mobil']; 

} 
    
    // (4) Kalau sudah, kita lanjut Query / Menambahkan data pada SQL (Disini ada perintah untuk SQL), Masukkan ke tabel showroom_mobil (include setiap nama column)
    $query = mysqli_query($connect, "INSERT INTO showroom_mobil(nama_mobil, brand_mobil, warna_mobil, tipe_mobil, harga_mobil) VALUES ('$namaMobil', '$brandMobil', '$warnaMobil', '$tipeMobil', '$hargaMobil')");

    // (5) Buatkan kondisi jika eksekusi query berhasil
    if ($query) {
        echo "<script>alert('Data mobil diterima')</script>";
        echo "<meta http-equiv='refresh' content'1 url=form_create_mobil.php'>";
    }

    // (6) Jika terdapat kesalahan, buatkan eksekusi query gagalnya 

    else {
        echo "<script>alert('Data Mobil Tidak Berhasil Ditambahkan')</script>";
        echo "<meta http-equiv='refresh' content'1 url=form_create_mobil.php'>";
    }

// (7) Tutup koneksi ke database setelah selesai menggunakan database
?>