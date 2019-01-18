<?php

class compte extends entity{

protected $nom;
protected $type;
protected $somme;

const MINISOMME = 50;

public function setNom(string $nom){
    $this->nom = $nom;
}

public function setType(string $type){
    $this->type = $type;
}

public function setSomme(int $somme){
    $this->somme = $somme;
}

public function getNom(){
    return $this->nom;
}
public function getType(){
    return $this->type;
}
public function getSomme(){
    return $this->somme;
}

public function __construct(array $data) {
    $this->hydrate($data);
}
}



?>