<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>
    <?php 
        $num = 1;
        $num2 = 1; 
        $num3 = 1; 
        $num4 = 1;
        //operadores de comparacao / logicos
        echo '-- Inicio do loop --<br/>';
        while($num < 10){
            echo"$num <br/>";
            $num++;

        }

        echo '-- Fim do loop --<br/>';

        echo '-- Inicio do loop --<br/>';
        while($num2 < 20){
            echo"$num2 <br/>";
            $num2 += 5;

        }

        echo '-- Fim do loop --<br/>';

        echo '-- Inicio do loop --<br/>';
        while(true){
            echo"$num3 <br/>";
            $num3 += 5;
            if($num3 > 100){

            break; //interrompe o loop

        }
        }

        echo '-- Fim do loop --<br/>';

        echo '-- Inicio do loop --<br/>';
        while($num4 < 10){
            
            $num4 ++;
            if($num4 == 2 || $num4 == 6){

            
            continue;}
            echo"$num4 <br/>";
            

        }

        echo '-- Fim do loop --<br/>';
    


    ?>
    
</body>
</html>