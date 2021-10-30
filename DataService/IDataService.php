<?php

interface IDataService
{
    public function Connect($serverName, $Database, $user, $passwd);
    public function ReadAll();
    public function Add($name, $defeated, $cd);
    public function Remove($id);
}

?>