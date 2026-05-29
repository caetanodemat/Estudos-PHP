<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>

        <?php
            $num = 7.3;
            echo ceil(7.3); // arredonda para cima
            echo '<br />';
            echo floor(7.3); // arredonda para baixo
            echo '<br />';
            echo round(7.3); // arredonda para o valor mais próximo
            echo '<br />';
            echo rand(10, 20); // gerar um valor aleatório
            echo '<br />' . getrandmax();
            echo '<br />';
            echo sqrt(10); // raiz quadrada
            echo '<br />';

            
        ?>

</body>
</html>