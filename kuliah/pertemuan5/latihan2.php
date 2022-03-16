<?php

// ARRAY Multidimensi
// Array di dalam array
$mahasiswa = [
    ["Nadilla Ananda", "213040076", "nputriananda21@gmail.com",
    "Teknik Informatika"], 
    ["Yanto Pindhi", "213040103", [1,[2],3], "viane@gmail.com", 
    "Teknik Informatika"]
];
echo $mahasiswa[1][2][1][0];

?>