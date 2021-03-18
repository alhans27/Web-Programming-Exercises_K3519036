<html>
    <head>
        Headings
    </head>
    <body>
        <?php
            $baris = 4;
            $kolom = 5;
            $x = 1;
            echo "<table border='1'>";
            for($i=0;$i<$baris;$i++){
                echo"<tr>";
                for($j=0;$j<$kolom;$j++){
                    echo "<td>" .$x. "</td>";
                    $x++;
                }
                echo "</tr>";
            }
            echo "</table>";
        ?>
    </body>
</html>