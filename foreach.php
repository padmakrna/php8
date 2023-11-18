<?php
//digunakan pada Array

$siswa = ["Ahmad", "Budi", "Cindy", "Deni", "Eka", "Farhan", 
"Gina", "Hadi", "Indah", "Jema", "Mima"];

foreach ($siswa as $no => $s) {
    echo ($no+=1) // dapat juga ditulid ++$no//
     . ". $s<br>";
}