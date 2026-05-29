<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>

        <?php 
            $nome = 'João';
            $cor_preferida = 'verde';
            $idade = 29;
            $gosta = 'jogar videogame';
            //operador . ou "
            echo'Olá ' . $nome . ', vi que sua cor preferida é '. $cor_preferida .', estou vendo tambem que você possui '. $idade .' anos e que gosta de '. $gosta .'';

            echo '<br/>';
            //" tem o mesmo resultado que o . '...' .
            echo "Olá $nome, vi que sua cor preferida é $cor_preferida, estou vendo tambem que você possui $idade anos e que gosta de $gosta"
        ?>   

</body>
</html>