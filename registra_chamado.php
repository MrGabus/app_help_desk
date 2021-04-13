<?php

    session_start();
    
    //Formatando o texto para salvar
    $titulo = str_replace('#', '-', $_POST['titulo']);
    $categoria = str_replace('#', '-', $_POST['categoria']);
    $descricao = str_replace('#', '-', $_POST['descricao']);

    //organizando como sera salvo
    $texto_arm = $_SESSION['id'] . '#' . $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL ;

    //abrindo o arquivo para salvar o formulario
    $arquivo = fopen('arquivo_chamado.hd', 'a');
    //exrevendo o texto
    fwrite($arquivo, $texto_arm);
    //fechando o arquivo
    fclose($arquivo);

    header('Location: abrir_chamado.php');

?>