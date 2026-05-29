<?php
    session_start();
    $_SESSION['x'] = 'Oi, sou um valor de sessão';
    print_r($_SESSION);
    echo '<hr />';
    $usuario_autenticado = false;
    $usuarios_app = array(
        array('email' => 'joaopedrocaetanodematos@outlook.com', 'senha' => '123456'),
        array('email' => 'user@helpdesk.com', 'senha' => '654321'),
    );

    foreach ($usuarios_app as $user) {
        if ($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
            $usuario_autenticado = true;
        }
    }

    if ($usuario_autenticado) {
        $_SESSION['autenticado'] = 'SIM';
        echo 'Usuário autenticado com sucesso!';
    } else {
        $_SESSION['autenticado'] = 'NAO';
        header('Location: index.php?login=erro');
    }

    /*print_r($_POST);

    echo '<br />';
    echo $_POST['email'];
    echo '<br />';
    echo $_POST['senha'];*/
?>