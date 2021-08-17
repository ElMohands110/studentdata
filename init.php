<?php

    ob_start(); // Output Buffering Start

    include 'conect.php';

    // Routes
    $tpl = 'include/templets/'; // Templete Directory
    $lang = 'include/languages/'; // Languages Directory
    $func = 'include/functions/'; // Functions Directory
    $css = 'layout/css/'; // Css Directory
    $js = 'layout/js/'; // JS Directory
    $img = 'layout/images/'; // Images Directory

    // Includes Files
    include $func . 'func.php';
    include $lang . 'en.php';
    include $tpl . 'header.php';

    // Include Navbar On All Expect The One With One $noNavbar Variable
    if (!isset($noNavbar)) { include $tpl . 'navbar.php'; }

    ob_end_flush(); // Output Buffering End

?>