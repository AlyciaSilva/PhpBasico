<html>
    <head>
        <meta charset = "utf-8"/>
        <link rel = "stylesheet" href = "_css4/estilo.css"/>
    </head>
    <body>
       <div>
            <?php
            $nome isset ($_GET["nome"])? $_GET["nome"] : "[Não informado]"; #Configurar para não aparecer msg de erro
            $data isset ($_GET["data"])? $_GET["data"] : 0;
            $sexo isset ($_GET["sexo"])? $_GET["sexo"] : "[Sem sexo]";
            $idade = 2020 - $data;
            echo "$nome é $sexo tem $idade anos";
            ?>
            <br>
            <a href = "2exerc.html"> Voltar </a>
       </div> 
    </body>
</html>