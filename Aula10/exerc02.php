<html>
    <head>
        <meta charset = "utf-8"/>
        <link rel = "stylesheet" href = "_css4/estilo.css"/>
    </head>
    <body>
       <div>
            <?php
             $d = isset ($_GET['ds'])? $_GET['ds'] : 0;
            switch ($d) {
                case 2:
                case 3:
                case 4:
                case 5:
                case 6:
                    echo "LEVANTA E VAI ESTUDAR!";
                    break;
                case 7:
                case 8:
                    echo "descanse pequeno gafanhoto";
                    break;    
                default:
                    echo "dia da semana inválido";
            }
            ?>
            <br/>
            <br/>
            <a href = "javascript:history.go(-1)" class = "botao">voltar</a>
       </div> 
    </body>
</html>