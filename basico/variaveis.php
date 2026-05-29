<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>

        <?php
            //string
            $nome = 'João Pedro Matos';

            //int
            $idade = 29;

            //float
            $peso = 82.5;

            //boolean
            $fumante_sn = true; //true = 1 ou false = nada

            //logica caso suba uma variavel igual, a que sera valida sera a ultima exemplo

            $idade = 40;

           
        ?>
        <h1>Ficha cadastral</h1>
        <br/>
        <p>Nome: <?= $nome ?></p> <!-- a tag?= é valida assim como a ?php print ou ?php echo, ambas funcionam da mesma forma-->
        <p>Nome: <?php echo $nome ?></p>
        <p>Nome: <?php print $nome ?></p>
        <p>Idade: <?= $idade ?></p>
        <p>Peso: <?= $peso ?></p>
        <p>Fumante: <?= $fumante_sn ?></p>

</body>
</html>