<html>
    <head>
        Headings
        <style>
            .genap {color:red;}
        </style>
    </head>
    <body>
        <?php
            for($i=1;$i<=6;$i++){
                if($i % 2 == 0){
                    echo "<h" .$i. " class='genap'>Heading " .$i. "</h" .$i. ">";
                }else{
                    echo "<h" .$i. ">Heading " .$i. "</h" .$i. ">";
                }
                
            }
        ?>
    </body>
</html>