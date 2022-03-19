<?php

    date_default_timezone_set("America/Guayaquil");

    error_reporting(E_ALL);
    ini_set('ignore_repeated_errors', TRUE);
    ini_set('display_errors', FALSE);
    ini_set('log_errors', TRUE);
    ini_set("error_log", constant('URL')."log/log_error_" . date('d-m-Y') . ".log");
    
    define('URL', 'http://localhost/Php/Practica/Codigos/Php/MVC/');

    define('HOST', 'localhost');
    define('DB', '');
    define('USER', 'root');
    define('PASSWORD', '');
    define('CHARSET', 'utf8mb4');

?>