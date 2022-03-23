<?php
// Array Numerik
// Array yang index-nya ber-asosiasi / berpasangan dengan angka

$mahasiswa = [
    ["Nadilla Ananda", "213040076", "nputriananda21@gmail.com", "Teknik Informatika"],
    ["Chino Gaming", "213040099", "chino123@gmail.com", "Astrologi"]
];


// var_dump ($mahasiswa[0][2]);
?>

<?php foreach( $mahasiswa as $mhs ) { ?>
<ul>
    <li>Nama: <?php echo $mhs[0]?></li>
    <li>NPM: <?php echo $mhs[1]?></li>
    <li>Email: <?php echo $mhs[2]?></li>
    <li>Jurusan: <?php echo $mhs[3]?></li>
</ul>
<?php } ?>