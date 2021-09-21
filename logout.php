<?php

    include_once "autoload.php";
    session_destroy();
    header('Location: index.php');

?>