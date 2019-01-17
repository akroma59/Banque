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

    public function ajoutCompte() {
        $compteManager1 = new compteManager();
        if (!empty($_POST)) {
            $compte = new compte($_POST);  
            $compteManager1->addCompte($compte);

            var_dump($compte);
        }
        
        // header("location: index.php");
        // exit;
        require "view/addCompteView.php";

    }

}

?>