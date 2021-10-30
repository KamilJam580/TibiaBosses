<?php

class Boss
{
    public $name = "" ;
    public $defeated = "";
   

    public function __construct($name)
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