<?php 
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
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Daftar Mahasiswa</title>
  </head>
  <body>
      <div class="container">
          <h1>Daftar Mahasiswa</h1>
            <table class="table">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Gambar</th>
        <th scope="col">Nama</th>
        <th scope="col">NPM</th>
        <th scope="col">Email</th>
        <th scope="col">Jurusan</th>
        <th scope="col">Aksi</th>
        
        </tr>
    </thead>
    <tbody>

        <tr>
        <th scope="row">1</th>
        <td>
            <img src="img/nyan1.png" height="50" class="rounded-circle">
        </td>
        <td>Nadilla Ananda</td>
        <td>213040076</td>
        <td>nputriananda21@gmail.com</td>
        <td>Teknik Informatika</td>
        <td>
        <a href="" class="btn badge bg-info">edit</a>
            <a href="" class="btn badge bg-danger">delete</a>
        </td>
        </tr>

        <tr>
        <th scope="row">2</th>
        <td>
            <img src="img/kitten1.png" height="50" class="rounded-circle">
        </td>
        <td>Chino</td>
        <td>213040123</td>
        <td>chinochino21@gmail.com</td>
        <td>Teknik Informatika</td>
        <td>
        <a href="" class="btn badge bg-info">edit</a>
            <a href="" class="btn badge bg-danger">delete</a>
        </td>
        </tr>

        <tr>
        <th scope="row">3</th>
        <td>
            <img src="img/kitten2.png" height="50" class="rounded-circle">
        </td>
        <td>Mbik</td>
        <td>213040321</td>
        <td>mbikbau123@gmail.com</td>
        <td>Teknik Informatika</td>
        <td>
        <a href="" class="btn badge bg-info">edit</a>
            <a href="" class="btn badge bg-danger">delete</a>
        </td>
        </tr>

        <tr>
        <th scope="row">4</th>
        <td>
            <img src="img/kitten3.png" height="50" class="rounded-circle">
        </td>
        <td>Kuroo</td>
        <td>213040999</td>
        <td>kuroo321@gmail.com</td>
        <td>Teknik Informatika</td>
        <td>
        <a href="" class="btn badge bg-info">edit</a>
            <a href="" class="btn badge bg-danger">delete</a>
        </td>
        </tr>

        <tr>
        <th scope="row">5</th>
        <td>
            <img src="img/kitten4.png" height="50" class="rounded-circle">
        </td>
        <td>Loki</td>
        <td>213040213</td>
        <td>lokiimut123@gmail.com</td>
        <td>Teknik Informatika</td>
        <td>
            <a href="" class="btn badge bg-info">edit</a>
            <a href="" class="btn badge bg-danger">delete</a>
        </td>
        </tr>

    </tbody>
    </table>
      </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>