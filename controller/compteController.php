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
    public function affichCompte() {
        $compteManager = new compteManager();
        $id = htmlspecialchars($_GET["id"]);
        $compte = $compteManager->getCompte($id);
        require "view/detailCompteView.php";
    }

    public function ajoutCompte() {
        $compteManager = new compteManager();
        if (!empty($_POST)) {
            $compte = new compte($_POST);  
            $compteManager->addCompte($compte);
            redirectTo("");   
        }
        require "view/addCompteView.php";

    }
    public function supprimCompte(){
        $compteManager = new compteManager();
        $id = htmlspecialchars($_GET["id"]);
        $compteManager->suppCompte($id);
        redirectTo("");
    }

    public function modifSomme() {
        $compteManager = new compteManager;
        $id = htmlspecialchars($_GET["id"]);
        if (!empty($_POST)) {
            $compte = $compteManager->getCompte($id);
            $finalSomme = $compte->getSomme() + $_POST['somme'];
            $compte->setSomme($finalSomme);
            $compteManager->updateSomme($compte);  
            redirectTo("");
        }
        // var_dump ($compteManager->getCompte($id));
        require "view/updateSommeView.php";
        
    }
    
}

?>