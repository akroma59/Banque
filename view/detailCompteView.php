<?php

require "template/header.php";

?>
<div class="text-center">
    <a <?php setHref("addCompte"); ?> class="mr-5">Nouveau Compte</a>
    <a <?php setHref(""); ?> class="ml-5">Retour à la liste</a>
</div>
<!-- <div class="d-flex justify-content-centeeditCompter mt-5"> -->

    <?php
            if ($id === $_GET["id"]) { 
    ?>
        <div class="d-flex justify-content-centeeditCompter mt-5">
            <table class="table table-dark col-7 col-md-7 col-lg-7">
            <thead>
                <tr>
                <th scope="col">N°compte</th>
                <th scope="col">Type</th>
                <th scope="col">Nom</th>
                <th scope="col">Somme</th>
                <th scope="col">action</th>

                </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row"><?php echo $compte["id"]; ?></th>
                <td><?php echo $compte["type"]; ?></td>
                <td><?php echo $compte["nom"]; ?></td>
                <td><?php echo $compte["somme"]; ?></td>
                <td>
                    <!-- <a href="editCompte?id=<?php //echo $compte['id']; ?>" class="btn btn-success">Modifier</a> -->
                    <a href="?id=<?php echo $compte['id']; ?>" class="btn btn-danger">Supprimer</a>
                    <a href="?id=<?php echo $compte['id']; ?>" class="btn btn-success">Virement</a>
                    <a <?php setHref('retrait', ['id' => $compte['id']]); ?> class="btn btn-success">Retait</a>                
                    <!-- , 'action' => 'retrait' -->
                    <a href="modifSomme?id=<?php echo $compte['id']; ?>" class="btn btn-success">Vesement</a>                
                </td>
            </tr>
    </tbody>
    </table>
</div>
<!-- </div> -->

<?php
}
require "template/footer.php";

?>
