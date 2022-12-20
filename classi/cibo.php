<?php 
    include_once __DIR__  . '/prodotto.php';

    class cibo extends prodotto{
        public $peso;
        public $ingredienti;

        public function __construct(
            // Info padre
            String $nomeProdotto,
            Float $prezzo,
            String $immagine,
            Bool $is_available,
            categorie $categoria,
        
            // Info Nuove
            String $peso,
            String $ingredienti
            ) {
            parent::__construct($immagine, $nomeProdotto, $categoria, $prezzo, $is_available);
                
            $this -> peso = $peso;
            $this -> ingredienti = $ingredienti;
            

        }

    }

?>