<?php

function hitungGaji($gol, $masaKerja){
    if($gol == "A"){
        if($masaKerja < 10){
            $gaji = 5000000;
        } else {
            $gaji = 7000000;
        }
    } else if($gol == "B"){
        if($masaKerja < 10){
            $gaji = 6000000;
        } else {
            $gaji = 8000000;
        }
    }
    return $gaji;
}

echo "Gaji karyawan adalah " . hitungGaji("A", 8) . "<br>";
echo "Gaji karyawan adalah " . hitungGaji("A", 12) . "<br>";
echo "Gaji karyawan adalah " . hitungGaji("B", 1) . "<br>";
echo "Gaji karyawan adalah " . hitungGaji("B", 10) . "<br>";

?>