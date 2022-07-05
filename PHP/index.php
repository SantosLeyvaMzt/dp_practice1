<?php
    require "Controller/RequestController.php";

    $requestC   = new RequestController();
    $tenis      = @$requestC->getData( $_GET['color'] );
    $setFile    = $requestC->createFile( $tenis );
    
    echo $tenis;

?>
<html>
    <head>
        <title>Práctica #1 DP - PHP</title>
        <link rel="icon" type="image/x-icon" href="../assets/img/favicon.ico">
    </head>
    <body>
        <form action="index.php" id="formRestApi" method="get">
            <table align="center">
                <tr>
                    <td>Seleccione color: </td>

                    <td>
                        <select id="color" name="color">
                            <option>brown</option>
                            <option>red</option>
                            <option selected>green</option>
                            <option>blue</option>
                        </select>
                    </td>

                    <td>
                        <button type="submit" form="formRestApi" value="Submit">Obtener datos y crear archivo</button>
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>