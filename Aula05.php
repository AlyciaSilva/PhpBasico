<html>
    <head>
        <meta charset = "utf-8"/>
        <link rel = "stylesheet" href = "_css4/estilo.css"/>
        <style>
        h2{ font: 15pt Arial;
        color: #171559;
        }
        </style>
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
                $v1 = $_GET['x']
                $v2= $_GET['y']
                echo "<h2>Os valores recebidos: $v1 e $v2</h2>";
                echo "O valor absoluto de $v2 e".abs($v2); #Se o valor for negativo transforma em positivo
                echo "<br/>o valor de $v1<sup>$v2</sup> e".pow($v1,$v2);
                echo "<br/>A raiz de $v1 e".sqrt($v1);
                echo "<br/>O arredondamento de $v2 e".round($v2); #usando ceil arredonda para cima e floor para baixo
                echo "<br/>A parte inteira de $v2 e".intval($v2);
                echo "<br/> O valor de $v1 em moeda é R$".sqrt($v1,2,",",".");
            ?>
       </div> 
    </body>
</html>