<html>
    <head>
        <meta charset = "utf-8"/>
        <link rel = "stylesheet" href = "_css4/estilo.css"/>
    </head>
    <body>
       <div>
            <?php
            $n1 = isset ($_GET['n1']) ? $_GET['n1'] : "número não informado";
            $n2 = isset ($_GET['n2']) ? $_GET['n2'] : "número não informado"; 
            $media = ($n1 + $n2)/2;
            echo "Com as notas $n1 e $n2 sua situação é: <br/>";
            if ($media < 5 ){
                echo"REPROVADO";
            }elseif ($media >= 5 && $media <= 7){
                echo"RECUPERAÇÃO";
            }else {
                echo"APROVADO";
            }
            ?>
       </div> 
    </body>
</html>