<html>
    <head>
        <meta charset = "utf-8"/>
        <link rel = "stylesheet" href = "_css4/estilo.css"/>
    </head>
    <body>
       <div>
            <?php
                $preco = $_GET['a']
                echo "O preço é de".number_format($preco, 2)
                #$desconto = ($preco*10)/100 (como fiz)
                //$preco += ($preco*10)/100 // aumento
                $preco -= ($preco*10)/100 //desconto
                echo "<br/>O preço final é de".number_format($preco, 2)//.($desconto + $preco) 
            ?>
       </div> 
    </body>
</html>