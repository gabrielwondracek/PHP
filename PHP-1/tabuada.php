<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXEMPLO PHP</title>
    <style>
        body {
            margin: 0;
            font-size: 20px;
            font-weight: bold;
        }

        .verde {
            background-color: #00a000;
            width: 200px;
        }

        .red {
            background-color: #ff4040;
            width: 200px;
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
                echo("<div class='verde'>");
            }
            else 
            {
                echo("<div class='red'>");
            }
            echo("$valor * $x = ");
            echo($valor * $x);
            echo("</div> <br>");
        }
    ?>
</body>
</html>