<html>
    <head>
        Headings
        <style>
        .ganjil {color:red;background:white;}
        .genap {color:white;background:red;}
        </style>
    </head>
    <body>
        <?php
            $baris = 4;
            $kolom = 5;
            $x = 1;
            echo "<table border='1'>";
            for($i=0;$i<4;$i++){
                echo"<tr>";
                for($j=0;$j<5;$j++){
                    if($x % 2 == 0){
                        echo "<td class='genap'>" .$x. "</td>";
                    }else{
                        echo "<td class='ganjil'>" .$x. "</td>";
                    }
                    $x++;
                }
                echo "</tr>";
            }
            echo "</table>";
        ?>
    </body>
</html>