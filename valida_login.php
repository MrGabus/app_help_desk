<?php

    session_start();

    //Variavel para  verificar autenticação
    $usuario_autenticado = false;
    $usuario_id = null;
    $usuario_pefil_id  = null;

    $perfis = array(1 => 'Administrativo', 2 => 'Usuário');


    //Usuarios do sistema
    $usuarios_app = array(
        array('id' => 1,'email' => 'adm@teste.com', 'senha' => '12345', 'perfil_id' => 1),
        array('id' => 2,'email' => 'user@teste.com', 'senha' => 'abcde', 'perfil_id' => 1),
        array('id' => 3,'email' => 'joao@teste.com', 'senha' => '12345', 'perfil_id' => 2),
        array('id' => 4,'email' => 'lucia@teste.com', 'senha' => '12345', 'perfil_id' => 2)
    );
    
    //Valida o usuario e senha
    foreach ($usuarios_app as $user){

        if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
            $usuario_autenticado = true;
            $usuario_id = $user['id'];
            $usuario_pefil_id = $user['perfil_id'];
        }

    }


    if($usuario_autenticado){        
        $_SESSION['autenticado'] = 'SIM';
        $_SESSION['id'] = $usuario_id;
        $_SESSION['perfil_id'] = $usuario_pefil_id;
        header('Location: home.php');
    } else {
        $_SESSION['autenticado'] = 'NAO';
        header('Location: index.php?login=erro');
    }

?>