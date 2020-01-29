<?php
declare(strict_types=1);

class Adherent {

    private $nom;
    private $prenom;
    private $date_naissance;

    public function __construct(string $nom, string $prenom, \DateTime $date_naissance)
    {

        $this->nom = $this->removeAccent(ucfirst($nom));
        $this->prenom = $this->removeAccent(ucfirst($prenom));
        $this->date_naissance = $date_naissance;

    }

    public function getNom()
    {
        return $this->nom;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }


    public function getInfo()
    {
        return $this->getPrenom(). " ". $this->getnom() . " " . $this->date_naissance->format("d/m/Y");
    }

    private function removeAccent(string $str){
        $utf8 = array(
            '/[áàâä]/u' => 'a',
            '/[ÁÀÂÄ]/u' => 'A',
            '/[ÍÌÎÏ]/u' => 'I',
            '/[íìîï]/u' => 'i',
            '/[éèêë]/u' => 'e',
            '/[ÉÈÊË]/u' => 'E',
            '/[óòö]/u' => 'o',
            '/[ÓÒÔÖ]/u' => 'O',
            '/[úùûü]/u' => 'u',
            '/[ÚÙÛÜ]/u' => 'U',
            );
            return preg_replace(array_keys($utf8), array_values($utf8), $str);
    }
}