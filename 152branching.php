<?php

//if 1 variabel
$hari = "hujan";
if ($hari == "hujan") {
    echo "saya bawa payung";
}

echo "<hr>";

//if 2 variabel
if ($hari == "hujan") {
    echo "saya bawa payung";
} else {
    echo "saya tdk bawa payung";
}

echo "<hr>";

//latihan
$nilai = 105 ;
if ($nilai >= 75 AND $nilai <= 100) {
    echo "lulus";
} elseif ($nilai >= 75 AND $nilai <75) {
    echo "tidal lulus";
} else {
    echo "tidak ada ketentuan nilai ini";
}

//if 3 variabel

echo "<hr>";

// if else if

if ($nilai >= 91 and $nilai <= 100): 
    echo "Nilai anda $nilai, nilai anda A";
elseif ($nilai >=83 and $nilai < 91 ) :
    echo "Nilai anda $nilai, nilai anda B";
elseif ($nilai >=75 and $nilai < 83) :
    echo "Nilai anda $nilai, nilai anda C";
elseif ($nilai >=75 and $nilai < 83) :
    echo "Nilai anda $nilai, nilai anda D";
else : 
    echo "Nilai anda $nilai, tidak dalam ketentuan";
endif;

echo "<hr>";
//contoh lain
$hasil = "A";
if ($hasil == "A") :
    echo "Istimewa";
elseif ($hasil == "B") :
    echo "Baik";
elseif ($hasil == "C") :
    echo "Cukup";
elseif ($hasil == "D") :
    echo "Kurang";
else :
    echo "tidak ada dalam ketentuan";
endif;