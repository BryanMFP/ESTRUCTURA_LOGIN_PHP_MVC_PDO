<?php

class Errores extends Controller
{
    public function __construct() 
    {
        parent::__construct();
        error_log('Errors::construct -> Inicio de Errores');
        $this->view->render('errores/index', 
        [
            'error' => 'Ups! pagina no encontrada, ocurrio un error'
        ]);
    }

    /*public function render()
    {
        $this->view->render('errores/index');
    }*/
}

?>