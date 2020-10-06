<?php

require_once '../traits/traits.php';


class Dipendente {

    use DettagliDipendente;

    protected $nome;
    protected $cognome;
    protected $codiceFiscale;
    public $matricola;

    public function __construct($_nome, $_cognome, $_matricola, $_codiceF) {

        $this->nome = $_nome;
        $this->cognome = $_cognome;
        $this->matricola = $_matricola;
        $this->codiceFiscale = $_codiceF;

        //effettuo opportuni controlli a verifica, lanciando eccezioni:
        if (is_numeric($_nome) || !is_string($_nome)) {
            throw new Exception('Attenzione, inserire un nome valido');
        }
        if (is_numeric($_cognome) || !is_string($_cognome)) {
            throw new Exception('Attenzione, inserire un cognome valido');
        }
        if(strlen($_codiceF)<>16 || !is_string($_codiceF)){
            throw new Exception('Attenzione, valore inserito non corretto, riprova');
        }

    }

    public function setNome($_nome){
        if (empty($_nome) || !is_string($_nome)) {
            throw new Exception("Campo vuoto o valore non valido");
        }
        $this->nome = $_nome;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setCognome($_cognome){
        if (empty($_cognome) || !is_string($_cognome)) {
            throw new Exception("Campo vuoto o valore non valido");
        }
        $this->cognome = $_cognome;
    }

    public function getCognome(){
        return $this->cognome;
    }

    public function setCodiceFiscale($_codiceF){
        if(strlen($_codiceF)<>16 || !is_string($_codiceF)){
            throw new Exception('Attenzione, valore inserito non corretto. Riprova');
        }
        $this->codiceFiscale = $_codiceF;
    }

    public function getCodiceFiscale(){
        return $this->codiceFiscale;
    }

}
