<?php

class Dirigente extends Dipendente {

    protected $benefits;

    public function __construct($_nome, $_cognome, $_matricola, $_codiceF, $_benefits) {
    parent::__construct($_nome, $_cognome, $_matricola, $_codiceF);

        if(empty($_benefits) && !is_string($_benefits)){
            throw new Exception('Attenzione, verifica campo benefits o qualifica dipendente');
        }

        $this->benefits = $_benefits;
    }
}
