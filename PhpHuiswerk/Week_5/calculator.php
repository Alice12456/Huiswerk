
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="POST">
            Getal 1: <input type=number name="getal_1" method="POST"> <br>
            Getal 1: <input type=number name="getal_1" method="POST"> <br><br>
            Optellen(+)<input type="radio" name="optellen" value="optellen">
            Aftrekken(-)<input type="radio" name="optellen" value="afrekenen">
            Delen(/)<input type="radio" name="optellen" value="delen">
            Vermenigvuldigen(*)<input type="radio" name="optellen" method="POST" value="vermenigvuldigen">
            <br><br>-----------------------------------------------------------------------------<br>
            <input type="submit" value="Bereken" name="submit">
            <input type="submit" value="Velden leegmaken" name="submit">
        </form>
        <?php
        // put your code here
        ?>
    </body>
</html>
