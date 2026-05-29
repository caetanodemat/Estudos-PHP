<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>

        <?php
        //void
           function exibirBoasVindas() {
                echo 'Bem-vindo';
           }
            
           exibirBoasVindas();

           //retorno
           function calcularAreaTerreno($largura, $comprimento){
           echo $area = $largura * $comprimento;
            return $area;

           }
           echo '<br />';
            calcularAreaTerreno(12, 30);
            echo '<br />';
            calcularAreaTerreno(15, 30);
        ?>

</body>
</html>