<?php
    class prodotto{
        public $immagine;
        public $nomeProdotto;
        public $categoria;
        public $prezzo;

        public function __construct($immagine, $nomeProdotto, $categoria, $prezzo)
        {
            $this->immagine = $immagine;
            $this->nomeProdotto = $nomeProdotto;
            $this->categoria = $categoria;
            $this->prezzo = $prezzo;          
        }
    }
?>