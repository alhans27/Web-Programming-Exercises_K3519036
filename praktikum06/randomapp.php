<?php
    session_start();
    $_SESSION['rand'] = mt_rand(0,100);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Random Application</title>
</head>
<body>
    <h1>Aplikasi Random Angka antara 0 sampai 100</h1>
    <p>Halooo, nama saya Mr. PHP</p>
    <p>Saya telah memilih secara random sebuah bilangan bulat. Silahkan Anda menebak ya!</p>
    <form action="prosesrandom.php" method="post">
        Bilangan tebakan Anda <input type="text" name="tebakan">
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>