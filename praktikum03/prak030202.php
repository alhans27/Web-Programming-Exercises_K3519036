<?php

function hitungDenda($tglHarusKembali, $tglKembali){ //$tglHarusKembali&$tglKembali harus berformat= 'YYYY-MM-DD'

    // Pemecahan tanggal dari $tglHarusKembali
    $x = explode("-", $tglHarusKembali);
    $day1 = $x[2];
    $month1 = $x[1];
    $year1 = $x[0];

    // Pemecahan tanggal dari $tglKembali
    $y = explode("-", $tglKembali);
    $day2 = $y[2];
    $month2 = $y[1];
    $year2 = $y[0];

    // Menghitung JDN masing-masing tanggal
    $jdn1 = GregorianToJD($month1, $day1, $year1);
    $jdn2 = GregorianToJD($month2, $day2, $year2);

    // Menghitung selisih dari JDN
    $selisih = $jdn2 - $jdn1;

    // Menghitung nominal Denda
    
    if ($selisih < 0){
        $denda = 0; 
    } else {
        $denda = 3000; // Besar denda adalah 3ribu per hari
    }

    // Menghitung Biaya Denda,$biayaDenda = selisih $tglHarusKembali dengan $tglKembali dikali denda
    $biayaDenda = $selisih * $denda;

    return $biayaDenda;
}

echo "Besar Denda Pengembalian adalah: Rp " . hitungDenda("2021-01-03", "2021-01-05") . ",-";
echo "<br>";
echo "Besar Denda Pengembalian adalah: Rp " . hitungDenda("2021-03-29", "2021-04-05") . ",-";
echo "<br>";
echo "Besar Denda Pengembalian adalah: Rp " . hitungDenda("2021-03-29", "2021-03-28") . ",-";


?>