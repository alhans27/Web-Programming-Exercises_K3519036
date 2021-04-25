<?php
    session_start();

    $random = $_SESSION['rand'];

    if (isset($_POST['submit'])){
        $tebakan = (int)$_POST['tebakan'];
        if ($tebakan > $random){
?>
            <!-- Tampilan HTML -->
            <p>Halooo, nama saya Mr. PHP</p>
            <p>Saya telah memilih secara random sebuah bilangan bulat. Silahkan Anda menebak ya!</p>
            <br>
            <p>Waah... masih salah yaa, bilangan tebakan Anda terlalu tinggi</p>
            <br>
            <form action="prosesrandom.php" method="post">
                Bilangan tebakan Anda <input type="text" name="tebakan">
                <input type="submit" name="submit" value="Submit">
            </form>
<?php
        } else if ($tebakan < $random){
?>
            <!-- Tampilan HTML -->
            <p>Halooo, nama saya Mr. PHP</p>
            <p>Saya telah memilih secara random sebuah bilangan bulat. Silahkan Anda menebak ya!</p>
            <br>
            <p>Waah... masih salah yaa, bilangan tebakan Anda terlalu rendah</p>
            <br>
            <form action="prosesrandom.php" method="post">
                Bilangan tebakan Anda <input type="text" name="tebakan">
                <input type="submit" name="submit" value="Submit">
            </form>
<?php
        } else {
            echo "<p>Selamat yaaa.. Anda Benar, saya telah memilih bilangan ".$random."</p>";
            echo "<p><a href='randomapp.php'>Ulangi Lagi</a></p>";
        }

    }
?>