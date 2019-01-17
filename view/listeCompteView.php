<?php

require "template/header.php";

?>
<div class="text-center">
    <a href="addCompte">Nouveau Compte</a>
</div>
<div class="d-flex justify-content-center mt-5">
    <table class="table table-dark col-7 col-md-7 col-lg-7">
    <thead>
        <tr>
        <th scope="col">N°compte</th>
        <th scope="col">Type</th>
        <th scope="col">Nom</th>
        <th scope="col">Somme</th>
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
