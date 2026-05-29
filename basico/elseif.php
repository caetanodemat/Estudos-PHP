<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>
    <?php

        $usuario_possui_cartao_loja = false;
        $valor_compra = 10;
        $valor_frete = 700;
        $recebeu_desconto_frete = true;

        if($usuario_possui_cartao_loja  && $valor_compra >= 400){
            $valor_frete = 0;

        } else if($usuario_possui_cartao_loja && $valor_compra >= 300){
            $valor_frete = 10;

        } else if($usuario_possui_cartao_loja && $valor_compra >= 100){
            $valor_frete = 25;

        } else{
            $recebeu_desconto_frete = false;
        }
    ?>

        <h1>Detalhes do pedido</h1>
        <p>Possui cartão da loja?</p>
            <?php
            if($usuario_possui_cartao_loja) {
                echo 'SIM';
            } else{
                echo 'Não';
            }
            ?>
        <p> Valor da compra: <?= $valor_compra ?></p>

        <p> Recebeu desconto no Frete?</p>
        <?php
            if($recebeu_desconto_frete) {
                echo 'SIM';
            } else{
                echo 'Não';
            }
            ?>

            <p> Valor do Frete? <?= $valor_frete ?></p>
   
</body>
</html>
