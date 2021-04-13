<?php

    session_start();
    
    //Destruindo a seção e voltando para o index
    session_destroy();
    header('Location: index.php');

?>