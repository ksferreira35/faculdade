<?php

    session_start();
    session_destroy();
    header('Location: aluno/index.php');
    exit();

?>