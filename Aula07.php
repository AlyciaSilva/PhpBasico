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
                #diferença entre == e ===, o primeiro verifica se os valores são iguais e o segundo além disso faz a verificação de tipos
                $x = 8;
                $y ="8";
                $resp = ($x == $y) ? "SIM":"NÃO";
                echo "<br/>As variaveis são iguais? $resp";
                //Média de um aluno, pegando os valores pega url
                $nota1 = $_GET['n1'];
                $nota2 = $_GET['n2'];
                $media = ($nota1 + $nota2)/2;
                echo "<br/>A média entre $nota1 e $nota2 é $media <br/>";
                //$sit = ($media<6) ? "Reprovado":"Aprovado"; 
                echo "A situação do aluno é ".($media < 6) ? "Aprovado":"Reprovado";
                //Exericio para eleição
                $ano = $_GET['an'];
                $idade = 2020 - $ano;
                echo "<br/>O ano que vc nasceu é $ano então vc tem $idade";
                $tipo = ($idade >= 18 and  $idade < 65) ? "Obrigatório" : "Não obrigatório"
                echo "<br/>Seu voto é $tipo" 
            ?>
       </div> 
    </body>
</html>