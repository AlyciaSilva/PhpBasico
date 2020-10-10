<html>
    <head>
        <meta charset = "utf-8"/>
        <link rel = "stylesheet" href = "_css4/estilo.css"/>
    </head>
    <body>
       <div>
            <?php
                $preco = $_GET['a'];
                echo "O preço é de ".number_format($preco, 2);
                #$desconto = ($preco*10)/100 (como fiz)
                //$preco += ($preco*10)/100 // aumento
                $preco -= ($preco*10)/100; //desconto
                echo "<br/>O preço final é de".number_format($preco, 2);//.($desconto + $preco) 
                #Decremento
                $atual = $_GET["aa"];
                echo "<br/>O ano atual e $atual e o ano anterior é ".(--$atual);
                #Uso de ariaveis referenciadas
                $a = 3;
                $b = &$a;
                $b += 5;
                echo "<br/>A variavel A vale $a";
                echo "<br/>A variavel B vale $b";
                #Variaveis de variaveis
                $x = "abc";
                $$x = "def";
                echo "<br/>O conteudo da varaivel X é $x";
                echo "<br/>A variavel criada recebeu o valor $abc";
            ?>
       </div> 
    </body>
</html>