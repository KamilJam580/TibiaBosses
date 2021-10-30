<?php

class Boss
{
    public $id;
    public $name;
    public $defeated;
   

    public function __construct($name, $id = null, $defeated = null)
    {
        
        $this->name = $name;
        $this->defeated = new DateTime('2000-01-01');
    }

    public function Defeat()
    {
        $this->defeated = new DateTime();
    }
}





?>