<?php

//Function qui retourne un tableau contenant les routes de notre application

//Modèle des routes
//"NomDeLaRoute" => [
//  "Controller",
//  "Fonction",
//  Optionnel [
//    "parametre1" => ["typeAttendu", optionnel[valeurAttendu]],
//    "parametre2" => ["typeAttendu", optionnel[valeurAttendu]]
//  ]
// "status" => "role"
//]
function getRoutes() {
  return [
    "" => [
      "compte",
      "affichComptes"
    ],
    "addCompte" =>[
      "compte",
      "ajoutCompte"
    ],
    "editCompte" =>[
      "compte",
      "modifCompte",
      ["id" => ["integer"]]
    ],
    "detailCompte" => [
      "compte",
      "affichCompte",
      ["id" => ["integer"]]
    ]
  ];
}

 ?>
