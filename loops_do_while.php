<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>
    <?php
        $x = 1;

        do{
            echo '$x = ' . $x . ' - Entrou no do while';
            $x++;

        }while($x < 9);

        echo '<br/>';
        while($x < 9);{
            echo '$x = ' . $x . ' - Entrou no do while';
            $x++;

        }

        
        
        
        ?>
</body>
</html>