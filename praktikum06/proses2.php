<?php

    // daftar users
    $users = array(
        array("username1", "Hanif Sajid Al Amna", "123456"),
        array("username2", "Aisya Rafida Salma", "654321"),
        array("username3", "Silmi 'Urfah", "112233")
    );

    // jika form login sudah submitted
    if (isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        // proses pengecekan ada tidaknya username dan password dalam daftar users
        foreach ($users as $profile_user){
            if (($profile_user[0] == $username) && ($profile_user[2] == $password)){
                // jika ada yang match maka bikin cookie untuk simpan nama user
                setcookie("namauser", $profile_user[1], time()+24*3600, "/");

                // redirect halaman ke page1.php
                header("Location: page1cookie.php");
            }
        }

        // jika tidak ada username dan password yang match
        echo "<h3>Login gagal</h3>";
        echo "<p>Silahkan <a href='form.html'>login kembali</a></p>";
    }

?>