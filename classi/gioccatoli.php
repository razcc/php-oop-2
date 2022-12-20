<?php
include_once __DIR__ . '/prodotto.php';

class gioccatoli extends prodotto{
    public $caratteristiche; 
    public $dimensioni;

    public function __construct(
        // Info padre
        String $immagine,
        String $nomeProdotto,
        categorie $categoria,
        Float $prezzo,
        Bool $is_available,

        // Nuove info
        String $caratteristiche,
        String $dimensioni
    )
    {
        parent:: __construct($immagine, $nomeProdotto, $categoria, $prezzo, $is_available);

        $this -> caratteristiche = $caratteristiche;
        $this -> dimensioni = $dimensioni;
        
    }
}


?>