<html>
    <head>
        <meta charset = "utf-8"/>
        <link rel = "stylesheet" href = "_css4/estilo.css"/>
    </head>
    <body>
       <div>
            <?php
            $numero = isset ($_GET['n1']) ? $_GET['n1'] : 0;
            $esc = isset ($_GET['esc']) ? $_GET['esc'] : 1;
            switch ($esc) {
                case 1:
                    $r = $numero * 2;
                    echo "$r";
                break;
                case 2:
                    $r = $numero ^ 3;
                    echo "$r";
                break;
                case 3:
                    $r = sqrt($numero);
                    echo "$r";
                break;
                default:
                    echo"Escolha inválida";
            }
            ?>
       </div> 
    </body>
</html>