<?php

trait DettagliDipendente {

    protected $contratto;
    protected $retribuzioneAnnuaLorda;
    protected $codiceIban;

    public function setContratto($_contratto){
        $this->contratto = $_contratto;
    }

    public function setRetribuzione($_retribuzioneAnnuaLorda){
        $this->retribuzioneAnnuaLorda = $_retribuzioneAnnuaLorda;
    }

    public function setIban($_codiceIban){
        $this->codiceIban = $_codiceIban;
    }

    public function getContratto(){
        return $this->contratto.' ';
    }

    public function getRetribuzione(){
        return $this->retribuzioneAnnuaLorda;
    }

    public function getIban(){
        return $this->codiceIban;
    }

}
