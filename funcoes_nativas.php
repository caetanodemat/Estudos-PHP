<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>

        <?php
            
            $texto = 'curso Completo de PHP';
            //string to lower
            echo $texto . '<br />';
            echo strtolower($texto);
            //string to upper
            echo '<br />' . $texto . '<br />';
            echo strtoupper($texto);
            //upper case first
            echo '<br />' . $texto . '<br />';
            echo ucfirst($texto);
            //string lenght
            echo '<br />' . $texto . '<br />';
            echo strlen($texto);
            //string replace
            echo '<br />' . $texto . '<br />';
            echo str_replace('PHP', 'JavaScript', $texto);
            //'curso Completo de PHP'
            echo '<br />' . $texto . '<br />';
            echo substr($texto, 1, 4 );
            echo '<br />' . $texto . '<br />';
            echo substr($texto, 6, 8 ); // 6é a posição inicial da letra no texto, o numero a seguir é a quantidade que sera compartilhada



        ?>

</body>
</html>