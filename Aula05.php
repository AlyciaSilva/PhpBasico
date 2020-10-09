<html>
    <head>
        <meta charset = "utf-8"/>
        <link rel = "stylesheet" href = "_css4/estilo.css"/>
    </head>
    <body>
       <div>
            <?php
                $n1 = 3;
                $n2 = 2;
                $s = $n1 + $n2;
                echo "A soma é $s!!";
                //Adicionando o resto do operadores
                echo "<br/>A divisão é ".($n1/$n2);
                echo "<br/>A multiplicação é ".($n1*$n2);
                echo "<br/>A subtração é ".($n1-$n2);
                echo "<br/>O modulo é ".($n1%$n2);
                #Ordem de precedência
                $media = ($n1+$n2)/2;
                echo "<br/>A media é $media";
                //Recebendo do usuário
                $a = $_GET['a'];
                $b = $_GET['b'];
                echo "<h2>Os valores recebidos: $a e $b</h2>";
                echo "A soma é $s!!";
                echo "<br/>A divisão é ".($a/$b);
                echo "<br/>A multiplicação é ".($a*$b);
                echo "<br/>A subtração é ".($a-$b);
                echo "<br/>O modulo é ".($a%$b);
                $media1 = ($a+$b)/2;
                echo "<br/>A media é $media";
                #Funções aritiméticas
            ?>
       </div> 
    </body>
</html>