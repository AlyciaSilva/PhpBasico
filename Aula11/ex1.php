<html>
    <head>
        <meta charset = "utf-8"/>
        <link rel = "stylesheet" href = "_css4/estilo.css"/>
    </head>
    <body>
       <div>
            <?php
                 $i = 0;
                 while ($i < 11) {
                     echo "$i <br/>";
                     $i ++;
                 } 
                 $i = 10;
                 while ($i > 0) {
                     echo "$i <br/>";
                     $i --;
                 } 
            ?>
            <br/>
            <br/>
            <a href = "javascript:history.go(-1)" class = "botao">voltar</a>
       </div> 
    </body>
</html>