<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>

    <h3> Pós-incremento</h3>
        <?php
           
            $a = 7;
            $b = 7;
            $c = 7;
            $d = 7;
           echo "O valor contido em a é $a <br />";
           echo 'O valor contido em a pré o incremento é ' . $a++ . ' <br />';
           echo "O valor atualizado em a é $a <br />";
           echo 'O valor contido em b apos o incremento é ' . ++$b . ' <br />';
           echo "O valor atualizado em a é $b <br />";
           echo 'O valor contido em c pre o decremeto é ' . $c-- . ' <br />';
           echo "O valor atualizado em a é $c <br />";
           echo 'O valor contido em d apos o decremeto é ' . --$d . ' <br />';
           echo "O valor atualizado em a é $d <br />";
        ?>

</body>
</html>