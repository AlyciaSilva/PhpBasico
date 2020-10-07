<html>
    <head>
        <meta charset = "utf-8"/>
        <link rel = "stylesheet" href = "_css4/estilo.css"/>
    </head>
    <body>
       <div>
            <?php
                $n = 4;
                $nome = "Gustavo ";
                echo $nome;
                #concatenando variaveis 
                $idade = 36;
                echo $nome." tem ".$idade." anos."; 
                #ou tbm
                echo "\n $nome tem $idade anos!!";
                #Mas usando as aspas simples '', não há diferenciação
                echo '\n $nome tem $idade anos!!';
            ?>
       </div> 
    </body>
</html>