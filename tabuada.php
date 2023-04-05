<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXEMPLO PHP</title>
    <style>

    .roxo
    {
        background-color:#7371E7;
    }
    .rosa
    {
        background-color:#DC83F2;
    }

    </style>
</head>
<body>

    <?php

    $valor = $_POST["valor"];

    for($x=1;$x<=10;$x++)
    {
        if($x%2 == 0)
        {
        echo("<div class= 'roxo'>");
        }
        else
        {
            echo("<div class= 'rosa'>");
        }
        echo($valor * $x);
        echo("</div> <br>");
    }


    ?>
</body>
</html> 