<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>
    <?php
        
        $registros = array(
            array('Titulo' => 'Titulo noticia 1', 'Conteudo' => 'Conteudo noticia 1'),
            array('Titulo' => 'Titulo noticia 2', 'Conteudo' => 'Conteudo noticia 2'),
            array('Titulo' => 'Titulo noticia 3', 'Conteudo' => 'Conteudo noticia 3'),
            array('Titulo' => 'Titulo noticia 4', 'Conteudo' => 'Conteudo noticia 4')
        );

        echo '<pre>';
        print_r($registros);
        echo '<prev/>';

    
        echo 'O array possui: '. count($registros) . ' registros';
        echo '<hr/>';/*
        while($idx < count($registros)){
            echo '<h3>'.$registros[$idx]['Titulo'].'</h3>';
            echo '<p>'.$registros[$idx]['Conteudo'].'</p>';
            echo '<hr/>';
            $idx++;
        }

        echo '<pre>';
        print_r($registros);
        echo '<prev/>';

        do {
            echo '<h3>'.$registros[$idx]['Titulo'].'</h3>';
            echo '<p>'.$registros[$idx]['Conteudo'].'</p>';
            echo '<hr/>';
            $idx++;
        
        }while ($idx < count($registros));
*/
        for($idx = 0; $idx < count($registros); $idx++){
            echo '<h3>'.$registros[$idx]['Titulo'].'</h3>';
            echo '<p>'.$registros[$idx]['Conteudo'].'</p>';
            echo '<hr/>';
        }

        


        
        
        
        ?>
</body>
</html>