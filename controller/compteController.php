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

    public function modifSomme() {
        $compteManager = new compteManager();
        $id = $_GET["id"];
        $compte = $compteManager->getCompte($id);

        if (!empty($_POST)) {
            $compte->versement($_POST["somme"]);
            $compteManager->updateSomme($compte);
            redirectTo("");
        }
        require "view/updateSommeView.php";
        
    }
    
    //fonction qui fait les retrait
    public function retraitSomme() {
        $compteManager = new compteManager();
        $id = $_GET["id"];
        $compte = $compteManager->getCompte($id);

        if (!empty($_POST)) {
            $compte->retrait($_POST['somme']);
            $compteManager->updateSomme($compte);
            redirectTo("");
        }
        require "view/retraitView.php";
    }

    //fonction qui fait un virement
    public function virementSomme() {
        $compteManager = new compteManager();
        $idSender = $_GET["id"];
        $compteSender = $compteManager->getCompte($idSender);

        if (!empty($_POST)) {
            $idGetter = $_POST["id"];
            $compteGetter = $compteManager->getCompte($idGetter);
            $compteSender->retrait($_POST["somme"]);
            $compteGetter->versement($_POST["somme"]);
            $compteManager->updateSomme($compteSender);
            $compteManager->updateSomme($compteGetter);
            redirectTo("");
        }
        require "view/virementView.php";
    }    
}
?>