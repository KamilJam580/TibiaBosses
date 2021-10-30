<?php

include_once("IDataService.php");
class SqlSrvService implements IDataService
{
    public $connection;
    public function Connect($serverName, $Database, $user, $passwd)
    {
        $conn = $this->connection;
        try  {  
            $conn = new PDO( "sqlsrv:server=$serverName ; Database=$Database", "$user", "$passwd");  
            //$conn = new PDO( "sqlsrv:server=$serverName ; Database=testdb", "elo", "321");  
            //$conn = new PDO( "sqlsrv:server=$serverName ; Database=testdb", "", "");  
            $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );  
        }  
        catch(Exception $e)  {   
            die( print_r( $e->getMessage() ) );   
        }  
        if( $conn === false )  {
            die( "Brak połączenia</br>");  
        }
        if( $conn === true )  {
            echo "Polonczono</br>";  
        }
        $this->connection = $conn;
    }

    public function ReadAll()
    {
        $conn = $this->connection;
        $sth = $conn->query('SELECT * FROM Persons ');
        $rows = $sth->fetchAll();
        foreach($rows as $row) {
            printf("$row[0] $row[1]</br>");
        }
    }


}

?>