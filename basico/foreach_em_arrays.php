<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>
    <?php
        
       $funcionarios = array(
        array('nome' => 'João', 'salario' => 2500),
        array('nome' => 'Maria', 'salario' => 3000),
        array('nome' => 'Júlia', 'salario' => 2800)
       );

       echo '<pre>';
       print_r($funcionarios);
       echo '<prev/>';

       foreach($funcionarios as $idx => $funcionario){
        foreach($funcionario as $idx2 => $valor){
            echo "$idx2: $valor <br/>";
        }
        echo "ID $idx - Nome: $funcionario[nome] - Salário: $funcionario[salario] <br/>";
       }
        


        
        
        
        ?>
</body>
</html>