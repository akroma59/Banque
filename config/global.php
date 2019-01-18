<?php
//fichier de configuration globale, notamment utilisé dans le routeur et pour les redirection
function getGlobalConfig() {
 return $config = [
   "protocol" => "",
   "host" => "localhost/LAB/Banque/",
   "status" => ["anonymous", "user", "admin"],
   "defaultRoute" => ""
 ];
} ?>