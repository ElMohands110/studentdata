<?php 

    ob_start(); // Output Buffering Start

    session_start(); // Start Session
    session_unset(); // Unset The Data
    session_destroy(); // Destroy The Session

    header('Location: index.php');
    exit();

    ob_end_flush(); // Output Buffering End
?>