<html>
    <head>
        <meta charset = "utf-8"/>
        <link rel = "stylesheet" href = "_css4/estilo.css"/>
    </head>
    <body>
       <div>
            <?php
                #operador unário
                $n1 = $_GET['a'];
                $n2 = $_GET['b'];
                $tipo = $_GET['op'];
                echo "Os valores foram $n1 e $n2";
                $r = ($tipo == "s") ? $n1+$n2 : $n1*$n2;
                echo "<br/>O resultado é $r";
                #diferença entre == e ===
            ?>
       </div> 
    </body>
</html>