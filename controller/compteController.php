<?php
require "model/compteManager.php";

class compteController 
{
    public function affichComptes() {
        $compteManager = new compteManager();
        $comptes = $compteManager->getComptes();
        require "view/listeCompteView.php";
        var_dump($comptes);
    }
}

?>