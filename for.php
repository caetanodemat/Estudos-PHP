<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>
    <?php
        // for(variavel, condição, incremento)
        for ($x = 11; $x < 22; $x++) {
            echo "$x <br/>";
        } 
        echo '<br/>';
        echo '<br/>';
        echo '<br/>';



        for($x1 = 1; true; $x1++){
        
            if($x1 >= 20){
                break;
            }
            echo "$x1 <br/>";
        }  
        for ($x = 11; $x > 0; $x--) {
            echo "$x <br/>";
        } 

        

        

        
        
        
        ?>
</body>
</html>