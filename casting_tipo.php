<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>

        <?php
           
            //gettype() = retorna o tipo da variável
            $valor = 10;
            $valorf = 15.8;
            $texto = '25.847';
            $valor2 = (float) $valor;
            $valor3 = (string) $valor;
            $valorf2 = (int) $valorf;
            $valorf3 = (string) $valorf;
            $texto2 = (int) $texto;
            $texto3 = (float) $texto;
            $texto4 = (bool) $texto;

            echo $valor. '' . gettype($valor);
            echo '<br \>';
            echo $valor. '' . gettype($valor2);
            echo '<br \>';
            echo $valor. '' . gettype($valor3);
            echo '<br \>';
            echo $valorf2. '' . gettype($valorf2);
            echo '<br \>';
            echo $valorf3. '' . gettype($valorf3);
            echo '<br \>';
            echo $texto2. '' . gettype($texto2);
            echo '<br \>';
            echo $texto3. '' . gettype($texto3);
            echo '<br \>';
            echo $texto4. '' . gettype($texto4);
           
        ?>

</body>
</html>