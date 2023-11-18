<?php
echo "<h3>Belajar Variabel</h3>";
$a1 = 9;
$a2 = 3;
echo "$a1 + $a2 =" . ($a1 + $a2);
echo "<br>";
echo "$a1 - $a2 =" . ($a1 - $a2);
echo "<br>";
echo "$a1 x $a2 =" . ($a1 * $a2);
echo "<br>";
echo "$a1 : $a2 =" . ($a1 / $a2);
echo "<br>";
echo "$a1 % $a2 =" . ($a1 % $a2);
echo "<hr>";

/* tanda '-' untuk kurang, '*' untuk kali, '/' untuk bagi */

echo "<h3>Data Integer </h3>";
# inisiasi dan inisialisasi variabel
$a = 10;
$b = 5;
$c = $a + 5;
$d = $b + (10 * 5);
$e = $d - $c;

# Tampilkan data dengan perintah echo
echo "Variabel a: {$a} <br>";
echo "Variabel b: {$b} <br>";
echo "Variabel c: {$c} <br>";
echo "Variabel d: {$d} <br>";
echo "Variabel e: {$e} <br>";

echo "<hr>";
echo "<h3>Data Float</h3>";
# mengetahui tipe data dari variabel
var_dump($e);

$nilaiMatematika = 5.1;
$nilaiIPA = 6.7;
$nilaiBahasaIndonesia = 9.3;

# hitung nilai rata-rata
$rataRata = ($nilaiMatematika + $nilaiIPA + $nilaiBahasaIndonesia) / 3;

# Tampilkan data

echo "Matematika: {$nilaiMatematika} <br>";
echo "IPA: {$nilaiIPA} <br>";
echo "Bahasa Indonesia: {$nilaiBahasaIndonesia} <br>";
echo "Rata-rata: {$rataRata} <br>";

echo "<hr>";
echo "<h3> Data Boolean </h3>";
# lihat tipe data dari variabel $rataRata
var_dump($rataRata);

$apakahSiswaLulus = true;
$apakahSiswaSudahUjian = false;

var_dump($apakahSiswaLulus);
echo "<br>";
var_dump($apakahSiswaSudahUjian);

echo "<hr>";
echo "<h3>Data String</h3>";

$namaDepan = "Nabillah"; # pakai tanda petik dua
$namaBelakang = 'Aletha'; # pakai tanda petik satu

# menggabungkan dua variabel dengan tanda
# petik dua
$namaLengkap = "{$namaDepan} {$namaBelakang}";

# anda juga bisa menggabungkan string dengan menggunakan tanda titik (.)
$namaLengkap2 = $namaDepan . ' ' . $namaBelakang;

# [Tampilkan Data]
# kita bisa memasukkan variabel lain jika menggunakan tanda petik dua
echo "Nama Depan: {$namaDepan} <br>"; 
# ada pun jika pakai tanda petik satu, kita tidak bisa memasukkan variabel 
# di dalam string akan tetapi menggabungkannya dengan operator titik (.)
echo 'Nama Belakang: ' . $namaBelakang . '<br>';

echo $namaLengkap;

echo "<hr>";
echo "<h3>Data Array</h3>";
$siswa = ["bill","qeel","Jess"];
echo $siswa[0];
echo "<br>";
print_r($siswa);

echo "<br>";
$stday = array("jurnalistik","proweb","prodesk","promob");
print $stday[2];
echo "<br>";
var_dump($stday);