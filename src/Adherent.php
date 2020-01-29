<?php
declare(strict_types=1);

class Adherent {

    private $nom;
    private $prenom;
    private $date_naissance;

    public function __construct(string $nom, string $prenom, \DateTime $date_naissance)
    {

        $this->nom = ucfirst($nom);
        $this->prenom = ucfirst($prenom);
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
}