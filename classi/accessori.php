<?php
include_once __DIR__ . '/prodotto.php';

class accessori extends prodotto{
    public $materiale; 
    public $dimensioni;

    public function __construct(
    $immagine,
    $nomeProdotto,
    $categoria,
    $prezzo,
    $materiale,
    $dimensioni
    ){
        $this -> materiale = $materiale;
        $this -> dimensioni = $dimensioni;

        parent ::__construct(
            $immagine,
            $nomeProdotto,
            $categoria,
            $prezzo
        );
    }   
}


?>