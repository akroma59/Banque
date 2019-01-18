<form action="updateSomme?id=<?php echo $_GET["id"]; ?>" method="post">
    <div class="d-flex flex-wrap">
        <div class="form-group col-10 col-md-8 col-lg-4">
            <label for="somme">Somme</label>
            <input type="text" class="form-control" id="somme" name="somme" value="">
        </div>
    </div>
    <button type="submit" class="btn btn-primary ml-3">Submit</button>
</form>
