<?php 
// $mahasiswa = ["Nadilla Ananda", "213040076", "Teknik Informatika", "nputriananda21@gmail.com"];

// Array Multidimensi = Array didalam Array
$mahasiswa = [
    ["Nadilla Ananda", "213040076", "Teknik Informatika",
     "nputriananda21@gmail.com"],
    ["Kucing Kecebur Got", "213040103", "Teknik Informatika",
     "kucingbaugot12@gmail.com"],
    ["Chino", "213040999", "Astrologi", "chino123@gmail.com"]
];



?>

<!DOCTYPE html> 
<html>
    <head>
        <title>Daftar Mahasiswa</title>
        <body>

            <h1> Daftar Mahasiswa</h1>

            <ul>
                <!-- <li>Nadilla Ananda</li>
                <li>213040076</li>
                <li>Teknik Informatika</li>
                <li>nputriananda21@gmail.com</li> -->

                <!-- <?php foreach( $mahasiswa as $mhs ) : ?>
                    <li><?= $mhs; ?></li>
                <?php endforeach; ?> -->

                <!-- <li><?= $mahasiswa[0]; ?></li>
                <li><?= $mahasiswa[1]; ?></li>
                <li><?= $mahasiswa[2]; ?></li>
                <li><?= $mahasiswa[3]; ?></li> -->
                
                <?php foreach( $mahasiswa as $mhs ) : ?>
                <li>Nama : <?= $mhs[0]; ?></li>
                <li>NRP : <?= $mhs[1]; ?></li>
                <li>Jurusan : <?= $mhs[2]; ?></li>
                <li>Email : <?= $mhs[3]; ?></li>

            </ul>
            <?php endforeach; ?>
        </body>
    </head>
</html>