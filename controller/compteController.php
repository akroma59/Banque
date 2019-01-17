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
<<<<<<< HEAD
    public function supprimCompte(){
        $compteManager = new compteManager();
        $id = htmlspecialchars($_GET["id"]);
        $compteManager->suppCompte($id);
        redirectTo("");
    }
=======

    // public function modifCompte() {
    //     $compteManager = new compteManager();
    //     if (!empty($_POST)) {
    //         $compte = new compte($_POST);  
    //         $compteManager->editCompte($id);
    //         redirectTo("");       
    //     }
    //     require "view/editCompteView.php";
    // }
    
>>>>>>> edbd457c2fc6a86b6fce82709ee52d5efc396d5c
}

?>