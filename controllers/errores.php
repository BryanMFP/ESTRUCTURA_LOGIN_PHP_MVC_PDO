<?php

class Errores extends Controller
{
    public function __construct() 
    {
        parent::__construct();
        error_log('Errors::construct -> Inicio de Errores');
        $this->view->render('errores/index', 
        [
            'error' => Errors::ERROR_PAGE_NOT_EXISTS
        ]);
    }

    /*public function render()
    {
        $this->view->render('errores/index');
    }*/
}

?>