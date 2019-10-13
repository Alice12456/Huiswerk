
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        function my_min($array){
            //deze variable bevat de waarde met de eerste index
            $indexVanKleinsteWaarde = $array[0];
            //Ga heel de array bij langs
            foreach($array as $x) {
                //Als de loop voorbij een kleiner getal dan $indexVanKleinsteWaarde komt,
                //verander deze variable naar dat kleinere getal
                if($x<$indexVanKleinsteWaarde) {
                    $indexVanKleinsteWaarde = $x;
                }
            }
            return $indexVanKleinsteWaarde;
        }
        
        function my_max($array){
        //deze variable bevat de waarde met de eerste index
        $indexVanGrootsteWaarde = $array[0];
        //Ga heel de array bij langs
        foreach($array as $x) {
            //Als de loop voorbij een kleiner getal dan $indexVanKleinsteWaarde komt,
            //verander deze variable naar dat kleinere getal
            if($x > $indexVanGrootsteWaarde) {
                $indexVanGrootsteWaarde = $x;
            }
        }
        return $indexVanGrootsteWaarde;
        }

        $getallenRij = array(9,1,2,7,7,3,0,7,15,1);
        $kleinste = my_min($getallenRij);
        $grootste = my_max($getallenRij);
        echo "Het kleinste getal = " . $kleinste;
        echo "<br> Het grootste getal = " . $grootste . "<br> <br>";
        ?>
        
    </body>
</html>
