<?php

require "template/header.php";

?>
<div class="text-center">
    <a href="addCompte">Nouveau Compte</a>
</div>
<div class="d-flex justify-content-centeeditCompter mt-5">
    <table class="table table-dark col-7 col-md-7 col-lg-7">
    <thead>
        <tr>
        <th scope="col">N°compte</th>
        <th scope="col">Type</th>
        <th scope="col">Nom</th>
        <th scope="col">Somme</th>
<<<<<<< HEAD
        <th scope="col">Action</th>
=======
        <th scope="col">action</th>

>>>>>>> edbd457c2fc6a86b6fce82709ee52d5efc396d5c
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ($comptes as $key => $value) {
        ?>
            <tr>
            <th scope="row"><?php echo $value["id"]; ?></th>
            <td><?php echo $value["type"]; ?></td>
            <td><?php echo $value["nom"]; ?></td>
            <td><?php echo $value["somme"]; ?></td>
<<<<<<< HEAD
            <td><a href="suppCompte?id=<?php echo $value["id"];?>" class="card-link"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
            <td><a href="updateUser?id=<?php echo $value["id"];?>" class="card-link"><i class="fa fa-address-card" aria-hidden="true"></i></a></td>
            <td></td>
=======
            <td>
                <!-- <a href="editCompte?id=<?php //echo $value['id']; ?>" class="btn btn-success">Modifier</a> -->
                <a href="?id=<?php echo $value['id']; ?>" class="btn btn-danger">Supprimer</a>
                <a href="detailCompte?id=<?php echo $value['id']; ?>" class="btn btn-primary">Detail</a>
            </td>

>>>>>>> edbd457c2fc6a86b6fce82709ee52d5efc396d5c
            </tr>
        <?php
            }
        ?>
    </tbody>
    </table>
</div>

<?php

require "template/footer.php";

?>
