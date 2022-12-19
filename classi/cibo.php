<?php 
    include_once __DIR__  . '/prodotto.php';

    class cibo extends prodotto{
        public $peso;
        public $ingredienti;

        public function __construct(
            $immagine,
            $nomeProdotto,
            $categoria,
            $prezzo,
            $peso,
            $ingredienti
            ) {
            $this -> peso = $peso;
            $this -> ingredienti = $ingredienti;
            parent::__construct(
                $immagine,
                $nomeProdotto,
                $categoria,
                $prezzo
            );

        }

    }

?>