<?php

class CompteBancaire
{
    private float $solde;

    public function __construct($solde)
    {
        $this->setSolde($solde);
    }

    public function getSolde(): string
    {
        return number_format($this->solde, 2, ', ', ' ') . ' €';
    }

    private function setSolde($solde)
    {
        $this->solde = floatval($solde);
    }

    public function deposer($montant)
    {
        $this->setSolde($this->solde + $montant);
    }

    public function retirer($montant): bool
    {
        if($this->solde - $montant >= 0) {
            $this->setSolde($this->solde - $montant);
            return true;
        }
        return false;
    }


}