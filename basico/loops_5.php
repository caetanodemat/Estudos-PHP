<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>
    <?php
        
       $itens = array('sofa','mesa','cadeira','cama','guarda-roupa');
       echo '<pre>';
        print_r($itens);
        echo '<prev/>';

        foreach($itens as $item){
            echo '<p>'.$item.'</p>';
            if($item == 'cama'){
                echo '(Compre uma cama e ganhe um travesseiro)';
            }
        }

        


        
        
        
        ?>
</body>
</html>