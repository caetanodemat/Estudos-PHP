<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>

        <?php
            //variasveis constantes é sempre bom utilizar caracteres maiusculos
            define('BD_URL', 'endereco_bd_dev');
            define('BD_USUARIO', 'usuario_dev');
            define('BD_SENHA', 'senha_dev');
            //caso tente atribuir outro valar a variavel constante gerara um erro

            echo BD_URL . '<br />';
            echo BD_USUARIO . '<br />';
            echo BD_SENHA . '<br />';
        ?>

</body>
</html>