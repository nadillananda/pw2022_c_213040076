<?php
// Metode Request GET dan POST
// GET ($_GET) dikirim dengan URL
// POST ($_POST) dikirim dengan form

// SUPERGLOBALS
// Variabel milik PHP yang bisa kita gunakan (built in variabel)
// bentuknya Array Associative
// $_GET
// $_POST
// $_SERVER

// $_GET["nama"] = "Nadilla";
// $_GET["email"] = "nputriananda21@gmail.com";

// var_dump($_POST);
// var_dump($_GET);
if(isset($_GET["nama"])) {
    $nama = $_GET["nama"];
} else{
    $nama = 'Tidak Diketahui!';
}

?>

<h1>Halo, <?= $nama; ?></h1>
<ul>
    <li>
        <a href="kuliah_latihan1.php?nama=Doddy">Doddy</a>
    </li>
    <li>
    <a href="?nama=Ananda">Ananda</a>
    </li>
</ul>