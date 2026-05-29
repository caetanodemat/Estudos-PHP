<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>

        <?php
            $lista_coisas = [];
            $lista_coisas['frutas'] = array(1 => 'Banana', 2 => 'Maçã', 3 => 'Morango', 4 => 'Uva');
            $lista_coisas['pessoas'] = [1 => 'joao', 2 => 'maria', 3 => 'jose'];
            echo '<pre>';
            var_dump($lista_coisas);
            echo '</pre>';  
            echo '<br />';
            echo '<hr />';
            echo $lista_coisas['frutas'][1];
            echo '<br />';
            echo '<hr />';
            echo $lista_coisas['pessoas'][2];
        ?>

</body>
</html>