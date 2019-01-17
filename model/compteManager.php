<?php

class compteManager extends manager {
    //fonction qui reccupere tout les comptes
    public function getComptes() {
        $db = $this->getDb();
        $req = $db->query("SELECT * FROM comptes");
        $result = $req->fetchall(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getCompte($id) {
        $db = $this->getDb();
        $req = $db->prepare("SELECT * FROM comptes WHERE id = ?");
        $req->execute([$id]);
        $result = $req->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    //fonction qui ajoute un compte
    public function addCompte(compte $compte) {
        $db = $this->getDb();
        $req = $db->prepare("INSERT INTO comptes (nom, type, somme) VALUES (:nom, :type, :somme)");
        $result = $req->execute([
            "nom" => $compte->getNom(),
            "type" => $compte->getType(),
            "somme" => $compte->getSomme()
        ]);
        return $result;
        var_dump($result);

    }
    public function suppCompte($id) {
        $db = $this->getDb();
        $req = $db->prepare("DELETE FROM comptes WHERE id = $id");
        $result = $req->execute([
            "id" => $id,
        ]);
        return $result;
        var_dump($result);

<<<<<<< HEAD
    }
=======
    //fontion qui modifie un compte
    // public function editCompte($id) {
    //     $db = $this->getDb();
    //     $id =  $_GET["id"];
    //     $req = $db->prepare("UPDATE comptes SET nom = :nom, type = :type, somme = :somme WHERE id = :id");
    //     $result = $req->execute([
    //         "nom" => $compte->getNom(),
    //         "type" => $compte->getType(),
    //         "somme" => $compte->getSomme(),
    //         "id" => $id
    //     ]);
    //     return $result;

    // }

>>>>>>> edbd457c2fc6a86b6fce82709ee52d5efc396d5c
}

?>