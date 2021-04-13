<?php

    session_start();

    //Varial para  verificar autenticação
    $usuario_autenticado = false;


    //Usuarios do sistema
    $usuarios_app = array(
        array('email' => 'adm@teste.com', 'senha' => '12345'),
        array('email' => 'user@teste.com', 'senha' => 'abcde')
    );
    
    //Valida o usuario e senha
    foreach ($usuarios_app as $user){

        if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
            $usuario_autenticado = true;
        }

    }


    if($usuario_autenticado){        
        $_SESSION['autenticado'] = 'SIM';
        header('Location: home.php');
    } else {
        $_SESSION['autenticado'] = 'NAO';
        header('Location: index.php?login=erro');
    }

?>