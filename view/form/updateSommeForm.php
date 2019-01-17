<form action="" method="post">
    <input type="hidden" class="form-control" name="id" id="id" value="<?php //echo (isset($compte)?$compte["id"]:""); ?>">
    <div class="d-flex flex-wrap">
        <div class="form-group col-10 col-md-8 col-lg-4">
            <label for="somme">Somme</label>
            <input type="text" class="form-control" id="somme" name="somme" value="<?php //echo (isset($compte)?$compte["somme"]:"");?>">
        </div>
    </div>
    <button type="submit" class="btn btn-primary ml-3">Submit</button>
</form>
