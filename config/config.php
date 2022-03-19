<?php

    const URL      = "http://localhost/";
    const HOST     = "localhost";
    const DATABASE = "base_test";
    const USER     = "root";
    const PASSWORD = "root";
    const CHARSET  = "utf8mb4";

    date_default_timezone_set("America/Guayaquil");

    error_reporting(E_ALL);
    ini_set('ignore_repeated_errors', TRUE);
    ini_set('display_errors', FALSE);
    ini_set('log_errors', TRUE);
    ini_set("error_log", URL ."log/log_error_" . date('d-m-Y') . ".log");

?>