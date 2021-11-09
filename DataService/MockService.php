<?php

include_once("IDataService.php");
class MockService implements IDataService
{
    public $bosses;

    public function Connect($serverName, $Database, $user, $passwd)
    {
        return true;
    }

    public function ReadAll()
    {
        $this->bosses = array();
        $boss1 = new Boss(name:"Name1", id:1, defeated:'12-10-25 12:32:10.1234567');
        $boss2 = new Boss(name:"Name1", id:2, defeated:'12-10-25 12:32:10.1234567');
        $boss3 = new Boss(name:"Name3", id:3, defeated:'12-10-25 12:32:10.1234567');
        $this->bosses[] = $boss1;
        $this->bosses[] = $boss2;
        $this->bosses[] = $boss3;
        return $this->bosses;
    }
    public function Add($name, $defeated, $cd)
    {

    }
    public function Remove($id)
    {

    }


}



?>


