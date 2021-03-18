<html>
    <head>
        Headings
        <style>
            .genap {color:red;}
        </style>
    </head>
    <body>
        <?php
            $i = 1;
            while($i<=6){
                if($i % 2 == 0){
                    echo "<h" .$i. " class='genap'>Heading " .$i. "</h" .$i. ">";
                }else{
                    echo "<h" .$i. ">Heading " .$i. "</h" .$i. ">";
                }
                $i++;
            }
        ?>
    </body>
</html>