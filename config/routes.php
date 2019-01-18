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
    "suppCompte" =>[
      "compte",
      "supprimCompte",
      ["id" => ["integer"]]
    ],
    "modifSomme" =>[
      "compte",
      "updateSomme",
      ["id" => ["integer"]]
    ],
    "detailCompte" => [
      "compte",
      "affichCompte",
      ["id" => ["integer"]]
    ],
    "retrait" => [
      "compte",
      "retraitSomme",
      ["id" => ["integer"]],
    //   ["action" => ["string"]]
    ]
  ];
}

 ?>
