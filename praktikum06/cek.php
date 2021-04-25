<?php

    // mengecek keberadaan session 'namauser'
    // ket: session 'namauser akan tercreate ketika proses login sukses
    // silahkan cek kembali di script proses.php

    if (!isset($_SESSION['namauser'])){
        echo "<p>Hayooo... mau coba nge by-pass ya?</p>";
        echo "<p><a href='form.html'>Login</a> dulu ya..</p>";

        // setelah memunculkan pesan diatas, selanjutnya dibreak dengan exit()
        exit();
    }
?>