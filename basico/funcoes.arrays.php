<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>

        <?php
        /*
            $array = 'String';
            $retorno = is_array($array);

            if ($retorno) {
                echo 'É um array';
            } else {
                echo 'Não é um array';
            }
            echo '<br />';
            $array = [1 => 'a', 7 => 'b', 18 => 'c'];
            echo '<pre>';
            print_r($array);
            echo '</pre>';

            $chaves_array = array_keys($array);
            echo '<pre>';
            print_r($chaves_array);
            echo '</pre>';
            $array = array('notebook', 'teclado', 'mouse', 'monitor', 'gabinete');
            echo '<pre>';
            print_r($array);
            echo '</pre>';

            sort($array); //true ou false para ordem crescente ou decrescente
            echo '<pre>';
            print_r($array);
            echo '</pre>'; 

            $array = array('notebook', 'teclado', 'mouse', 'monitor', 'gabinete');
            asort($array); 
            echo '<pre>';
            print_r($array);
            echo '</pre>';  
            $array = array('notebook', 'teclado', 'mouse', 'monitor', 'gabinete');
            echo '<pre>';
            print_r($array);
            echo count($array);
            echo '</pre>'; 
            
            $array1 = ['osx', 'windows'];
            $array2 = array('linux');
            $array3 = ['solaris'];

            $novo_array = array_merge($array1, $array2, $array3);
            echo '<pre>';
            print_r($novo_array);
            echo '</pre>'; 
            $string = '26/09/2024';
            $array_retorno = explode('/', $string);
            echo '<pre>';
            print_r($array_retorno);
            echo $array_retorno[1]. '-'. $array_retorno[0].'-'. $array_retorno[2];
            echo '</pre>';*/
             $array = ['a', 'b', 'c', 'd', 'e'];
             $strinh_retorno = implode('+' , $array);
             echo $strinh_retorno;


            
        ?>

</body>
</html>