<?php

require_once "tablica_szablon.php";

try{
    $wymiarTablicy = isset($_GET['wymiar'])?$_GET['wymiar']:20;
    $tablicaMnozenia = new tablica_szablon($wymiarTablicy);
    $tablicaMnozenia->showTable();
}catch(Exception|TypeError|Throwable $e){
    echo sprintf("Wystąpił błąd w systemie: <br><br> <p style='border:1px solid black'>%s</p>", $e->getMessage());
}
