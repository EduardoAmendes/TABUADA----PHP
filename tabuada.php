<!DOCTYPE HTML>
<html lang = "pt-br">
    <head>
        <title>CALCULADORA</title>
        <meta charset = "UTF-8">
    </head>
    <body>
    	<h3>CALCULADORA</h3>
        <form action="" method="get">
            Primeiro Numero: <input name="num1" type="text" placeholder="Número" />
            Segundo numero: <input name="num2" type="text" placeholder="Número" /> 
            <input name="op" type="submit" value="+"/>
            <input name="op" type="submit" value="-"/>
            <input name="op" type="submit" value="*"/> 
            <input name="op" type="submit" value="/"/> 
 	   </form> 
       
    <?php
        $a = $_GET["num1"];
        $b = $_GET["num2"];
        $c = [];
        $op = $_GET["op"];

        if($op == "+"){
            $c = $a + $b;
            echo "$c";
        }else if($op == "-"){
            $c = $a - $b;
            echo "$c";
        }else if($op == "*"){
            $c = $a*$b;
            echo "$c";
        }else{
            $c = $a/$b;
            echo "$c";            
        }
 
    ?>     


    </body>
</html>