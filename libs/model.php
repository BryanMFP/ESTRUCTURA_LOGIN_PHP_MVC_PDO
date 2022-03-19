<?php

include_once 'libs/imodel.php';

class Model
{
    public function __construct() 
    {
        $this->db = new DB();
    }

    public function querys($query)
    {
        return $this->db->connect()->query($query);
    }

    public function prepares($query)
    {
        return $this->db->connect()->prepare($query);
    }
}


?>