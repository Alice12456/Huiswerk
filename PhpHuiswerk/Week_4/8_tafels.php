
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
        tabel, tr,td {
          border: 1px solid black;
        }
        </style>
    </head>
    <body>
        
        <table>
            <tr>
                <?php
                function tabel1(){
                    $tafel = 1;
                    $maal = 1;
                    while ($maal <=16) {
                    $resultaat = $tafel * $maal;
                    echo '<td>' . $resultaat . '<td>';
                    
                    $maal++;
                    if($maal > 15) {
                        $maal = 1;
                        $tafel++;
                        ?>
            </tr>
            <tr> 
                <?php
                    }
                    if($tafel == 16) {
                        return false;
                    }
                    }
                }
                
                echo tabel1(); 
                ?>
            </tr>
        </table>
        
    </body>
</html>
