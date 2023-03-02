<?php

require_once "tablica_dane.php";

class tablica_szablon{
    const WYMIAR_TABLICY = 10;

    private int $wymiar;
    private tablica_dane $tablicaDane;

    public function __construct(int $wymiar = self::WYMIAR_TABLICY){
        $this->tablicaDane = new tablica_dane($wymiar);
    }

    public function showTable():void
    {
        echo "<table border='1'>";
        foreach($this->tablicaDane->calculate() as $row){
            echo "<tr>";
            foreach($row as $value){
                echo "<td>";
                echo $value;
                echo "</td>";
            }
            echo "</tr>";
        }
        echo "<table>";           
    }
    
}
