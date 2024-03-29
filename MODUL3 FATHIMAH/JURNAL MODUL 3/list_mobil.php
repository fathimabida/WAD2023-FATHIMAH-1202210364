<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Mobil</title>
</head>
<body>
    <?php include("navbar.php") ?>
    <center>
        <div class="container">
            <table class="table">
            <h1>List Mobil</h1>
            <h1>Showroom EAD</h1>
            <thead>
                <tr> 
                    <th scope="col">ID</th>;
                    <th scope="col">Nama Mobil</th>;
                    <th scope="col">Brand Mobil</th>;
                    <th scope="col">Warna Mobil</th>;
                    <th scope="col">Tipe Mobil</th>;
                    <th scope="col">Harga Mobil</th>;
                </tr>
            </thead>
            <tbody>
            <?php
            include("connect.php");

            // Buatlah query untuk mengambil data dari database (gunakan query SELECT)            
            $query = mysqli_query($connect, "SELECT * FROM showroom_mobil");

            // Buatlah perkondisian dimana: 
            // 1. a. Apabila ada data dalam database, maka outputnya adalah semua data dalam database akan ditampilkan 
            //       (gunakan num_rows > 0, while, dan mysqli_fetch_assoc())
            //    b. Untuk setiap data yang ditampilkan, buatlah sebuah button atau link yang akan mengarahkan web ke halaman 
            //       form_detail_mobil.php dimana halaman tersebut akan menunjukkan seluruh data dari satu mobil berdasarkan id
            // 2. Apabila tidak ada data dalam database, maka outputnya adalah pesan 'tidak ada data dalam tabel'

            //<!--  **********************  1  **************************     -->
            $num_rows = mysqli_num_rows($query);

            if ($num_rows > 0){
                while ($selects = mysqli_fetch_assoc($query)) {
                 
            ?>

            <tr>
                    <th scope='row'><?= $selects['id']?></th>
                    <td><?= $selects['nama_mobil']?></td>
                    <td><?= $selects['brand_mobil']?></td>
                    <td><?= $selects['warna_mobil']?></td>
                    <td><?= $selects['tipe_mobil']?></td>
                    <td><?= $selects['harga_mobil']?></td>
                    <td> <a href="form_detail_mobil.php?id=<?php echo $selects['id']?>" class="btn btn-primary">Detail</a></td>
            </tr>
            <?php

                }
            }
    
            
            //<!--  **********************  1  **************************     -->

            //<!--  **********************  2  **************************     -->
            else {
                "<script>alert('Tidak Ada Data Dalam Tabel!')</script>";

            }

            //<!--  **********************  2  **************************     -->
            ?>
        </tbody>
        </table>
        </div>
    </center>
</body>
</html>
