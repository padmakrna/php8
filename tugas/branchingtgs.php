<?php

$nilai = -7;

if ($nilai >= 81 and $nilai <= 100) :
    echo "Nilai anda $nilai, anda mendapat nilai A
    dengan bobot 4";
elseif ($nilai >= 78 and $nilai <=80.99) :
    echo "Nilai anda $nilai, anda mendapat nilai A-
    dengan bobot 3.7";
elseif ($nilai >= 75 and $nilai <=77.99) :
    echo "Nilai anda $nilai, anda mendapat nilai B+
    dengan bobot 3.3";
elseif ($nilai >= 70 and $nilai <=74.99) :
    echo "Nilai anda $nilai, anda mendapat nilai B
    dengan bobot 3";
elseif ($nilai >= 65 and $nilai <=69.99) :
    echo "Nilai anda $nilai, anda mendapat nilai B-
    dengan bobot 2.7";
elseif ($nilai >= 60 and $nilai <=64.99) :
    echo "Nilai anda $nilai, anda mendapat nilai C+
    dengan bobot 2.3";
elseif ($nilai >= 55 and $nilai <=59.99) :
    echo "Nilai anda $nilai, anda mendapat nilai C
    dengan bobot 2";
elseif ($nilai >= 40 and $nilai <=54.99) :
    echo "Nilai anda $nilai, anda mendapat nilai D
    dengan bobot 1";
elseif ($nilai >= 0 and $nilai <=39.99) :
    echo "Nilai anda $nilai, anda mendapat nilai E
    dengan bobot 0";
else : 
    echo "Tidak dalam ketentuan";

endif;