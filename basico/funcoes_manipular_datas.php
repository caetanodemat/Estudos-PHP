<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>

        <?php
            //recuperação da data atual / data corrente
            date('d/m/Y/ H:i');
            echo date('d/m/Y H:i');
            echo date_default_timezone_get();
            echo '<br />';
            date_default_timezone_set('America/Sao_Paulo');
            date('d/m/Y/ H:i');
            echo date('d/m/Y H:i');
            echo date_default_timezone_get();

            $data_inicial = '2019-04-24';
            $data_final = '2019-04-30';
            echo '<br />';

            //timestamp
            $time_inicial = strtotime($data_inicial);
            $time_final = strtotime($data_final);
            echo $data_inicial . ' - ' . $time_inicial;
            echo '<br />';
            echo $data_final . ' - ' . $time_final;
            echo '<br />';
            $diferenca_times = $time_final - $time_inicial;
            echo 'Diferença entre as datas em segundos: ' . $diferenca_times;

            echo '<br />';
            $diferenca_dias = $diferenca_times / (60 * 60 * 24);
            echo 'Diferença entre as datas em dias: ' . $diferenca_dias;
        ?>

</body>
</html>