<?php
include_once __DIR__ . '/categorie.php';

    class prodotto{
        public $nomeProdotto;
        public $prezzo;
        public $immagine;
        public $is_available;
        public $categoria;

        public function __construct(
            String $immagine,
            String $nomeProdotto,
            categorie $categoria,
            String $prezzo,
            Bool $is_available
            ){
            $this->immagine = $immagine;
            $this->nomeProdotto = $nomeProdotto;
            $this->categoria = $categoria;
            $this->prezzo = $prezzo; 
            $this -> is_available = $is_available;       
        }
    }
?>