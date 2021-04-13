<html>
    <head>
        <style>
            table, th, td{
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
        <h1>DATA UKURAN TABUNG</h1>
        <?php
            $namaFile = "datatabung.dat";
            $myfile = fopen($namaFile, "r") or die("Tidak bisa buka file!");

            // Memecah data berdasarkan baris
            $Data = explode("\n", fread($myfile, filesize($namaFile)));

            // Menentukan batas data/banyaknya isi data
            $batas = count($Data)-1;

            // Memecah data tiap baris berdasarkan ","
            for($i=0; $i<$batas; $i++){
                $Data[$i] = explode(",", $Data[$i]);
            }
        ?>
        
        <!-- Membuat Header Tabel -->
        <table>
            <tr>
                <th>NAMA TABUNG</th><th>DIAMETER</th><th>TINGGI</th><th>LUAS</th>
            </tr>

        <!-- Menampilkan data -->
        <?php
            for ($row=0; $row<$batas;$row++) {
                echo "<tr>";
                for ($col=0; $col<count($Data[$row]); $col++) {
                    echo "<td>".$Data[$row][$col]."</td>";
                }
                $n= $Data[$row][0];
                $d= $Data[$row][1];
                $t= $Data[$row][2];
                echo "<td><a href='hitungluas.php?n=$n&d=$d&t=$t' >view</a></td>";
                echo "</tr>";
            }
            echo "</table>";
            
            fclose($myfile);
        ?>
    </body>
</html>