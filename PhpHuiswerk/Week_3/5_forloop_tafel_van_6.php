
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            table{
                    border: 1px solid black; 
                    margin-left: 50px;
                    margin-top: 50px;
                    width: 600px;
                    border-spacing: 0px 5px;
                    
            }
            th {
                text-align: left;
                padding-left:10px;
                padding-top:5px;
            }
            td {
                padding-left: 10px;
            }

        </style>

    </head>
    <body>
        <table>
            <tr>
                <th>
                    <font size="4">De resultaten van de omgekeerde tafel van 6</font>
                </th>
            </tr>
            
            <?php
            for ($i = 10; $i > 0; $i--) {
                echo "<tr><th>
                        $i *6=" . $i*6 .
                     "</th></tr>";
            }
            ?>
        </table>
    </body>
</html>
