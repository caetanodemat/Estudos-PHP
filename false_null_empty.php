<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>

        <?php

            //false (true /false) - tipo variavel voolean
            //null e empty - valores especiais

            $funcionario1 = null;
            $funcionario2 = '';

            //valores null
            if(is_null($funcionario1)){
                echo 'O funcionário 1 é nulo';
            }else{
                echo 'O funcionário 1 não é nulo';  }

                echo '<hr>';    
                if(is_null($funcionario2)){
                    echo 'O funcionário 2 é nulo'; }
                else{
                    echo 'O funcionário 2 não é nulo';  }

                echo '<hr>';
                            if(empty($funcionario1)){
                echo 'O funcionário 1 é vazio';
            }else{
                echo 'O funcionário 1 não é vazio';  }
                echo '<hr>';    
                if(empty($funcionario2)){
                    echo 'O funcionário 2 é vazio'; }
                else{
                    echo 'O funcionário 2 não é vazio';  }
        ?>

</body>

</html>