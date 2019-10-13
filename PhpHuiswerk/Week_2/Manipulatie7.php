<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $tekst = "  wazig TV-filmpje rond chique skybox  ";
        echo $tekst;
        echo "<br>";

        //woorden tellen en printen
        echo str_word_count($tekst), " woorden:", $tekst;
        echo "<br>";
        //vervangen, hoofdletters, trim
        echo str_replace(" ", "--",ucwords(trim($tekst, "  wazig")));

        ?>
    </body>
</html>

