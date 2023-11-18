<?php

$hasil = "A";
switch ($hasil) {
    case 'A':
        echo "Istimewa";
    case 'B':
        echo "Baik";
    case 'C':
        echo "Cukup";
        break;
    case 'D':
        echo "Kurang";
        break;
    
    default:
        echo "tidak ada dalam ketentuan";
        break;
}