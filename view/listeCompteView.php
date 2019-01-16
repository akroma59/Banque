<?php

require "view/template/header.php";

?>

<table class="table table-dark">
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
<?php

require "view/template/footer.php";

?>
