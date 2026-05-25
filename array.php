<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>

        <?php
            //sequenciais (numéricos)
            $lista_frutas = array('Banana', 'Maçã', 'Morango', 'Uva');
            echo '<pre>';
            var_dump($lista_frutas);
            echo '</pre>';
            echo '<br />';
            print_r($lista_frutas);
            echo '<br />';
            echo $lista_frutas[0];
            echo '<br />';
            echo $lista_frutas[1];
            echo '<br />';
            echo $lista_frutas[2];
            echo '<br />';
            echo $lista_frutas[3];
            $lista_frutas2 = ['a' => 'Banana',
                            'b' => 'Maçã',
                            'c' => 'Morango',
                            'd' => 'Uva'];
                            echo '<pre>';
                            var_dump($lista_frutas2);
                            echo '</pre>';
                            echo $lista_frutas2['a'];

        ?>

</body>
</html>