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
            if ($idade <= 18) {
                $voto = "Já pode votar";
                $dirigir = "já pode dirigir";
            } else {
                $voto = "Não pode votar";
                $dirigir = "Não pode dirigir";
            }
            echo "Com essa idade você $voto e também $dirigir";
            ?>
       </div> 
    </body>
</html>