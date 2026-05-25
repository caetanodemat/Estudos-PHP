<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>

        <?php
            
            $lista_frutas = array('Banana', 'Maçã', 'Morango', 'Uva');
            echo '<pre>';
            print_r($lista_frutas);  
            echo '</pre>';

            $existe = in_array('Banana', $lista_frutas);
            if($existe){
                echo 'Sim, existe a fruta';
            } else{
                echo 'Não, não existe a fruta';
            } 
            echo '<br />';

          echo   array_search('Morango', $lista_frutas);
?>
    </body>
</html>