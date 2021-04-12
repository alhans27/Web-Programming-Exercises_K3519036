<!-- USIA BELUM DITENTUKAN -->

<html>
    <head>
        <style>
            table, th, td{
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
        <h1>DATA MAHASISWA</h1>
        <?php
            $namaFile = "datamhs.dat";
            $myfile = fopen($namaFile, "r") or die("Tidak bisa buka file!");

            // Memecah data berdasarkan baris
            $Data = explode("\n", fread($myfile, filesize($namaFile)));

            // Menentukan batas data/banyaknya isi data
            $batas = count($Data);

            // Menentukan jumlah data
            $jmlData = $batas-1;    // Mengapa $batas-1 karena baris terakhir dalam data datamhs.dat adalah baris kosong
            echo "Jumlah Data : " . $jmlData . "<br>";

            // Memecah data tiap baris berdasarkan "|"
            for($i=0; $i<$jmlData; $i++){
                $Data[$i] = explode("|", $Data[$i]);
            }

            // Menghitung usia masing-masing mahasiswa dalam data
            for($x=0; $x<$jmlData; $x++){
                // Pemecahan tanggal lahir
                $tglLahir = explode("-", $Data[$x][2]);     // Angka [2] didapat karena letak tanggal lahir adalah di indeks ke 2
                $day1 = $tglLahir[2];
                $month1 = $tglLahir[1];
                $year1 = $tglLahir[0];

                // Tanggal hari ini
                $day2 = date("d");
                $month2 = date("m");
                $year2 = date("Y");

                // Menghitung JDN masing-masing tanggal
                $jdn1 = GregorianToJD($month1, $day1, $year1);
                $jdn2 = GregorianToJD($month2, $day2, $year2);

                // Menghitung selisih dari JDN
                $selisih = abs($jdn2 - $jdn1);

                // Menghitung usia
                $usia = floor($selisih / 365.25);   // Dibagi 365.25 karena satu tahun ada 365.25 hari

                // Menambahkan data ke dalam Array
                array_push($Data[$x], $usia);
            }

            // Membuat Header Tabel
            echo "<table>";
            echo "<tr>";
            echo "<th>No</th>";
            echo "<th>NIM</th>";
            echo "<th>Nama Mhs</th>";
            echo "<th>Tanggal Lahir</th>";
            echo "<th>Tempat Lahir</th>";
            echo "<th>Usia (Thn)</th>";
            echo "</tr>";

            // Menampilkan data
            for ($row=0; $row<$jmlData;$row++) {
                echo "<tr>";
                echo "<td>". ($row+1) ."</td>";
                for ($col=0; $col<count($Data[$row]); $col++) {
                    echo "<td>".$Data[$row][$col]."</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
            
            fclose($myfile);
        ?>
    </body>
</html>