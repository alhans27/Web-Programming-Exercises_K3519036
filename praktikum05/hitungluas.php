<html>
    <head></head>
    <body>        
    <?php
        $n = $_GET['n'];
        $d = $_GET['d'];
        $r = $d/2;
        $t = $_GET['t'];
        $phi = 3.14;

        $luas = 2*$phi*$r*($r+$t);

        echo "<h3>Luas tabung $n dengan diameter $d dan tinggi $t adalah $luas satuan luas</h3>";

    ?>
</body>
</html>