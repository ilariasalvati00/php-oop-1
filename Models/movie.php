<?php
class Movie
{
    public $titolo; 
    public $genere;
    public $anno;
    public $durata;
    public $regista; 

    //Definisco il costruttore 
    public function __construct($nome, $genere, $anno, $durata, $regista)
    {

        $this->titolo = $nome;
        $this->genere = $genere;
        $this->anno = $anno;
        $this->durata = $durata;
        $this->regista = $regista; 
    }

    public function getMovieInfo()
    { 
        $stringa = "Titolo: " . $this->titolo . "\n" . "Genere: " . $this->genere . "\n" . "Anno di uscita: " . $this->anno . "\n" . "Durata del film: " . $this->durata . "\n" . "Nome del regista: " . $this->regista; 
        return $stringa;
    }

    public function getMovieInfoHTML(){
        $stringa = "<h1>" . $this->titolo . "</h1>". "<ul><li>Genere: " . $this->genere . "</li>" . "<li>Anno: " .  $this->anno . "</li>" . "<li>Durata: " .  $this->durata . "</li>" . "<li>Regista: " .  $this->regista . "</li></ul>";
        return $stringa;
    }

}