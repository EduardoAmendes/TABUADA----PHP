<!DOCTYPE HTML>
<html lang = "pt-br">
    <head>
        <title>TABUADA</title>
        <meta charset = "UTF-8">
    </head>
    <body>
    	<h3>TABUADA</h3>
        <form action="" method="get">
            <input name="num" type="text" placeholder="Escolha o número da TABUADA" /> 
            <!-- um get para enviar o número-->
            <input name="t" type="submit" value="ENVIAR"/>
            <!-- e o input para enviar -->
 	</form> 
       
    <?php
        $num = $_GET['num'];
        $i = 1;


    for($i = 1; $i <= 10; $i++){
        $res = $i * $num; 
        echo "$i x $num =  $res <br/>";
    }  

    ?>     


    </body>
</html>