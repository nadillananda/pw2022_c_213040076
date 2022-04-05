<?php
// $mahasiswa = [
//     ["Nadilla Ananda", "213040076", "nputriananda21@gmail.com", "Teknik Informatika"],
//     ["Chino", "213040999", "chino123@gmail.com", "Ilmu Fisika"]
// ];

// Array Associative
// definisinya sama seperti array numerik, kecuali
// Key-nya bukan index, tapi string yang kita buat sendiri
$mahasiswa = [
    [
        "nama buku" => "Perempuan di Titik Nol",
        "penulis" => "Nawal el-Sadaawi", 
        "tahun terbit" => "Fiksi",
        "penerbit" => "Teknik Informatika",
        "gambar" => "buku1.jpeg"
    ],
    [
        "nama buku" => "Chino", 
        "penulis" => "213040999", 
        "tahun terbit" => "chino123@gmail.com",
        "penerbit" => "Ilmu Fisika",
        "gambar" => "kitten1.png"
    ],
    [
        "nama buku" => "Nadilla Ananda", 
        "penulis" => "Nawal el-Saadawi", 
        "tahun terbit" => "nputriananda21@gmail.com",
        "penerbit" => "Teknik Informatika",
        "gambar" => "nyan1.png"
    ],
    [
        "nama buku" => "Chino", 
        "penulis" => "213040999", 
        "tahun terbit" => "chino123@gmail.com",
        "penerbit" => "Ilmu Fisika",
        "gambar" => "kitten1.png"
    ],
    [
        "nama buku" => "Chino", 
        "penulis" => "213040999", 
        "tahun terbit" => "chino123@gmail.com",
        "penerbit" => "Ilmu Fisika",
        "gambar" => "kitten1.png"
    ],
    [
        "nama buku" => "Nadilla Ananda", 
        "penulis" => "213040076", 
        "tahun terbit" => "nputriananda21@gmail.com",
        "penerbit" => "Teknik Informatika",
        "gambar" => "nyan1.png"
    ],
    [
        "nama buku" => "Chino", 
        "penulis" => "213040999", 
        "tahun terbit" => "chino123@gmail.com",
        "penerbit" => "Ilmu Fisika",
        "gambar" => "kitten1.png"
    ],
    [
        "nama buku" => "Nadilla Ananda", 
        "penulis" => "213040076", 
        "tahun terbit" => "nputriananda21@gmail.com",
        "penerbit" => "Teknik Informatika",
        "gambar" => "nyan1.png"
    ],
    [
        "nama buku" => "Chino", 
        "penulis" => "213040999", 
        "tahun terbit" => "chino123@gmail.com",
        "penerbit" => "Ilmu Fisika",
        "gambar" => "kitten1.png"
    ],
    [
        "nama buku" => "Chino", 
        "penulis" => "213040999", 
        "tahun terbit" => "chino123@gmail.com",
        "penerbit" => "Ilmu Fisika",
        "gambar" => "kitten1.png"
    ]
];

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Daftar Buku</title>
        <style>
            .foto {
                height: 200px;
                width: 140px;
            }
        </style>
        <body>
            <h1>Daftar Mahasiswa</h1>
            <?php foreach( $mahasiswa as $mhs ) : ?>
            <ul>
                <li>
                    <img src="img/<?= $mhs["gambar"]; ?>" class="foto">
                </li>
                <li>Nama Buku : <?= $mhs["nama buku"]; ?></li>
                <li>Penulis : <?= $mhs["penulis"]; ?></li>
                <li>Sinopsis : <?= $mhs["tahun terbit"]; ?></li>
                <li>Penerbit : <?= $mhs["penerbit"]; ?></li>
            </ul>
            <?php endforeach; ?>
        </body>
    </head>
</html>


<!-- MINIMAL 10 KASUS -->