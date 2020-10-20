<html>
    <head>
        <meta charset = "utf-8"/>
        <link rel = "stylesheet" href = "_css4/estilo.css"/>
    </head>
    <body>
       <div>
            <?php
            $ano = isset ($_GET['ano']) ? $_GET['ano'] : 1900;
            $idade = date("Y") - $ano;
            echo "Você nasceu em $ano e tem $idade anos<br/>"; 
            if ($idade < 16){
                $tipoVoto = "não vota";
            }
            elseif (($idade >= 16 && $idade < 18) || ($idade > 65)){
                $tipoVoto = "voto opcional";
            }else {
                $tipoVoto = "obrigatório";
            }
            echo "Com essa idade você $tipoVoto";
            ?>
       </div> 
    </body>
</html>