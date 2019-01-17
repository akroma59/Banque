<?php
require "model/compteManager.php";

class compteController 
{
    public function affichComptes() {
        $compteManager = new compteManager();
        $comptes = $compteManager->getComptes();
        require "view/listeCompteView.php";
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

    // public function modifCompte() {
    //     $compteManager = new compteManager();
    //     if (!empty($_POST)) {
    //         $compte = new compte($_POST);  
    //         $compteManager->editCompte($id);
    //         redirectTo("");       
    //     }
    //     require "view/editCompteView.php";
    // }
    
}

?>