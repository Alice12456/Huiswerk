
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $getallenRij= array(1,2,3,4,5,6,7,8,9);
        
        function my_min($getallenRij){
            $indexVanKleinsteWaarde = $getallenRij[0];
            foreach ($getallenRij as $x){
                if ($x < $indexVanKleinsteWaarde){
                    $indexVanKleinsteWaarde = $x;
                }
            }
            return $indexVanKleinsteWaarde;
        }
        echo my_min($getallenRij);
        ?>
    </body>
</html>
