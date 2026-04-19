<?php

    session_start();
    session_destroy();
    header('Location: times/index.php');
    exit();

?>