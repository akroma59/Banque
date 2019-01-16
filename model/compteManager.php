<?php

class compteManager extends manager {
    public function getComptes() {
        $db = $this->getDb();
        $req = $db->query("SELECT * FROM comptes");
        $result = $req->fetchall(PDO::FETCH_ASSOC);
        return $result;
    }

}

?>