<?php
echo "<h2>Array 2 Dimensi</h2>";
$nama = [
    ["Joko", "jurnalistik", "laki-laki", 16],
    ["Hamidah", "ProDesk", "Perempuan", 17],
    ["Ayu", "Sekretaris", "Perempuan", 16],
];
var_dump($nama);
echo "<br>";
echo $nama[1][1];

echo "<h2>Array 2 Dimensi - Assosiatif</h2>";
$nilai = [
    "jess" => [
        "matematika" => 90,
        "ppkn" => 90,
        "fisika" => 90,
    ],
    "qeel" => [
        "matematika" => 89,
        "ppkn" => 86,
        "fisika" => 88,
    ],
    "bill" => [
        "matematika" => 95,
        "ppkn" => 90,
        "fisika" => 92,
    ],
];
var_dump($nilai);
echo "<br>";
echo $nilai["qeel"]["ppkn"];
echo "<br>";
echo '<pre>' . var_export($nilai, true) . '<pre>';