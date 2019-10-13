
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $mijnArray = array("naam" => "Digital Society Hub",
                            "straatnaam" => "Zernikepark 11",
                            "postcode" => "9747 AN",
                            "plaats" => "Groningen");
        foreach ($mijnArray as $key => $value) {
            echo $key . ": " . $value . "<br>";
        }
        
        ?>
    </body>
</html>
