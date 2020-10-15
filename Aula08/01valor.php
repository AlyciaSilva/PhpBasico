<html>
    <head>
        <meta charset = "utf-8"/>
        <link rel = "stylesheet" href = "_css4/estilo.css"/>
    </head>
    <body>
       <div>
            <?php
            $valor = $_GET["v"];
            $rq = sqrt($valor);
            echo "O valor enviado foi $valor e a raiz quadrada é $rq";
            ?>
            <br>
            <a href = "1exerc.html"> Voltar </a>
       </div> 
    </body>
</html>