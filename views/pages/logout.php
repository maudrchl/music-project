<?php
    include 'config.php';
    include 'views/partials/header.php';

    session_start();
    session_destroy();
    header('Location: login');
?>