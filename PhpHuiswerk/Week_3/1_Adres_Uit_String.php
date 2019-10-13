
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $adres = "Van Doorenveste, Zernikeplein 11, 9747 AS, Groningen";
        $array = explode(", ", $adres);
        echo "Naam van het gebouw: " . $array[0] . "<br>";
        echo "Adres: " . $array[1] . "<br>";
        echo "Postcode: " . $array[2] .  "<br>";
        echo "Plaats: " . $array[3] . "<br>";
        
        
        ?>
    </body>
</html>
