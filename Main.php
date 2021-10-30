<?php


    include_once("Models/Boss.php");
    $boss1 = new Boss("boss1");
    $boss1->Defeat();
    echo ($boss1->name. "</br>");
    echo ($boss1->defeated->format('Y-m-d H:i:s'). "</br>");


    $serverName = "DESKTOP-3L9UIL8";  
    try  {  
    $conn = new PDO( "sqlsrv:server=$serverName ; Database=testdb", "elo", "321");  
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

$sth = $conn->query('SELECT * FROM Persons ');
$rows = $sth->fetchAll();
foreach($rows as $row) {
    printf("$row[0] $row[1]</br>");
}

?>