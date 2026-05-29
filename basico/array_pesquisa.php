<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>

        <?php

            //in_array() - Verifica se um valor existe em um array
            //array_search() - Procura um valor em um array e retorna a chave correspondente
            $lista_frutas = ['Banana','Maça', 'Morango', 'Uva'];

            $existe2 = array_search('Uva', $lista_frutas); //retorna a chave do valor pesquisado

            if($existe2 != false){
                echo 'Sim, existe a fruta Uva na posição: ' . $existe2;
            }else{
                echo 'Não, não existe a fruta Uva';
            }

            echo '<pre>';
            print_r($lista_frutas);
            echo '</pre>';

            $existe = in_array('Maça', $lista_frutas);
            //true = 1
            //false = vazio
            if($existe){
                echo 'Sim, existe a fruta Maça';
                }else{
                    echo 'Não, não existe a fruta Maça';
                }
                echo '<hr>';
                

                $lista_coisas = ['frutas' => $lista_frutas, 'pessoas' => ['João', 'Maria', 'José']];
                echo '<pre>';
            print_r($lista_coisas);
            echo '</pre>';

            echo in_array('Uva', $lista_coisas['frutas']); //true
            echo '<br>';
            echo in_array('Maria', $lista_coisas['pessoas']); //true
            echo '<br>';
             echo array_search('Uva', $lista_coisas['frutas']); //retorna a chave do valor pesquisado
             echo '<br>';
             echo array_search('Maria', $lista_coisas['pessoas']); //retorna a chave do valor pesquisado




        ?>

</body>
</html>