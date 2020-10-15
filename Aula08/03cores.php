<html>
    <head>
        <?php
            $txt = isset ($_GET["t"])? $_GET["t"] : "Nenhum genério"; 
            $tam = isset ($_GET["tam"]) ? $_GET["tam"] : "12pt";
            $cor = isset ($_GET["cor"]) ? $_GET["cor"] : "#000000";
        ?>
        <meta charset = "utf-8"/>
        <link rel = "stylesheet" href = "_css4/estilo.css"/>
        <style>
            span.texto{
                font-size: <?php echo $tam; ?>;
                color: <?php echo $cor; ?>;
            }
        </style>    
    </head>
    <body>
       <div>
            <?php
                echo "<span class = 'texto'>$txt</span>";
            ?>
            <br>
            <a href = "3exerc.html"> Voltar </a>
       </div> 
    </body>
</html>