
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="POST">
            Getal 1: <input type=number name="getal_1"> <br>
            Getal 2: <input type=number name="getal_2"> <br><br>
            Optellen(+)<input type="radio" name="optellen" value="optellen" checked="checked">
            Aftrekken(-)<input type="radio" name="optellen" value="aftrekken">
            Delen(/)<input type="radio" name="optellen" value="delen">
            Vermenigvuldigen(*)<input type="radio" name="optellen" value="vermenigvuldigen">
            <br><br>-----------------------------------------------------------------------------<br>
            <input type="submit" value="Bereken" name="submit">
            <input type="reset" name="reset" value="Velden leegmaken">
        </form>
        <br>
        <?php 
        $getal1 = "";
        $getal2 = "";
        if(isset($_POST['submit'])){
            $getal1 = $_POST['getal_1'];
            $getal2 = $_POST['getal_2'];
            $input = $_POST['optellen'];
            $resultaat = "";
            
            switch ($input){
                case 'optellen':
                    $resultaat = $getal1 + $getal2;
                    break;
                case 'aftrekken':
                    $resultaat = $getal1 - $getal2;
                    break;
                case 'delen':
                    if($getal1 > 0 && $getal2 >0){
                    $resultaat = $getal1 / $getal2;
                    } else {
                        $resultaat = "Kan niet door 0 delen";
                    }
                    break;
                case 'vermenigvuldigen':
                    $resultaat = $getal1 * $getal2;
                    break;
                default :
                    $resultaat = 'error';
            }
            
            ?><h2> Resultaat: </h2>
            <?php echo $resultaat; 
        }
        ?>

    </body>
</html>
