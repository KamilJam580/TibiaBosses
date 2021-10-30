<?php


    include_once("Models/Boss.php");
    $boss1 = new Boss("boss1");
    $boss1->Defeat();
    echo ($boss1->name. "</br>");
    echo ($boss1->defeated->format('Y-m-d H:i:s'). "</br>");


    include_once("DataService/SqlServService.php");
    $data_service = new SqlSrvService();
    $serverName = "DESKTOP-3L9UIL8";  
    $data_service->Connect($serverName, "testdb", "elo" , "321");
    $data_service->Add('Scatlet', '12-10-25 12:32:10.1234567', 20);
    $data_service->ReadAll();
    



?>