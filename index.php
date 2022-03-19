<?php

    date_default_timezone_set("America/Guayaquil");

    error_reporting(E_ALL);
    ini_set('ignore_repeated_errors', TRUE);
    ini_set('display_errors', FALSE);
    ini_set('log_errors', TRUE);
    ini_set("error_log", URL ."log/log_error_" . date('d-m-Y') . ".log");

    require_once 'config/config.php';

    require_once 'libs/db.php';

    require_once 'libs/session.php';
    require_once 'libs/sessioncontroller.php';
    require_once 'domain/errors.php';
    require_once 'domain/success.php';

    require_once 'libs/controller.php';
    require_once 'libs/view.php';
    require_once 'libs/model.php';
    require_once 'libs/app.php';

    $app = new App();

?>