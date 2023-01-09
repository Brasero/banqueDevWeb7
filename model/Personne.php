<?php

class Personne
{

    private string $nom;
    private string $prenom;
    private int $age;
    private CompteBancaire $compteBancaire;

    public function __construct($nom, $prenom, $age)
    {
        $this->setNom($nom);
        $this->setPrenom($prenom);
        $this->setAge($age);
    }

    public function sePresenter()
    {
        echo "Bonjour, je m'appelle " . $this->getPrenom() . " " . $this->getNom() . " et j'ai " . $this->getAge() . " ans.";
    }

    public function getNom(): string
    {
        return ucfirst($this->nom);
    }

    public function getPrenom(): string
    {
        return ucfirst($this->prenom);
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function setNom(string $nom)
    {
        $this->nom = strtolower($nom);
    }

    public function setPrenom(string $prenom)
    {
        $this->prenom = strtolower($prenom);
    }

    public function setAge($age)
    {
        $this->age = intval($age);
    }

    public function getCompteBancaire(): CompteBancaire
    {
        return $this->compteBancaire;
    }

    public function setCompteBancaire(CompteBancaire $compteBancaire)
    {
        $this->compteBancaire = $compteBancaire;
    }

}