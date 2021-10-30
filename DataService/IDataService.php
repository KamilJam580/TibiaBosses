<?php

interface IDataService
{
    public function Connect($serverName, $Database, $user, $passwd);
    public function ReadAll();
}

?>