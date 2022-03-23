<?php
// Array Associative
// Array yang index-nya string
$mahasiswa = [
    ["nama" => "Nadilla Ananda", 
    "npm" => "213040076", 
    "email" => "nputriananda21@gmail.com", 
    "fakultas" => "Teknik Informatika"
],
[
    "nama" => "Chino", 
    "npm" => "213040099", 
    "email" => "chinofelix123@gmail.com", 
    "fakultas" => "Ilmu Fisika"
],
[
    "nama" => "Felix",
    "npm" => "213040100",
    "email" => "felix123@gmail.com",
    "fakultas" => "Astronomi"
]
];

// var_dump($mahasiswa[1]["nilai_tugas"]["tugas2"]);
?>


<?php foreach( $mahasiswa as $mhs) { ?>
    <ul>
        <li>Nama: <?php echo $mhs["nama"]?></li>
        <li>NPM: <?php echo $mhs["npm"]?></li>
        <li>Email: <?php echo $mhs["email"]?></li>
        <li>Jurusan: <?php echo $mhs["fakultas"]?></li>
    </ul>
    <?php } ?>

<hr>

    <?php foreach($mahasiswa as $mhs) { ?>
    <ul>
        <?php foreach($mhs as $key => $value) { ?>
        <li><?php echo $key; ?>: <?php echo $value; ?></li>
        <?php } ?>
    </ul>
    <?php } ?>