<?php
include_once __DIR__ . '/prodotto.php';

class accessori extends prodotto{
    public $materiale; 
    public $dimensioni;

    public function __construct(
        // Info padre
        String $nomeProdotto,
        Float $prezzo,
        String $immagine,
        Bool $is_available,
        categorie $categoria,

        // Nuove info
        String $materiale,
        String $dimensioni
    )
    {
        parent:: __construct($immagine, $nomeProdotto, $categoria, $prezzo, $is_available);

        $this -> materiale = $materiale;
        $this -> dimensioni = $dimensioni;
        
    }
}


?>