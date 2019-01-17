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
<<<<<<< HEAD
      "addCompte" =>[
        "compte",
        "ajoutCompte"
      ],
    "suppCompte" =>[
      "compte",
      "supprimCompte",
      ["id" => ["integer"]]
  ]
=======
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
>>>>>>> edbd457c2fc6a86b6fce82709ee52d5efc396d5c
  ];
}

 ?>
