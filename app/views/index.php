<form method="post" action="Register" class="col mx-4 my-4">
    <div class="form-group row">
        <label> Name <input type="text" name="name" class="form-control"/> </label>
    </div>
    <div class="form-group row">
        <label> Firstname <input type="text" name="firstname" class="form-control"/> </label>
    </div>
    <div class="form-group row">
        <label> Birthday <input type="date" name="birthday" class="form-control"/> </label>
    </div>
    <div class="form-group row">
        <label> Mail <input type="email" name="mail" class="form-control"/> </label>
    </div>

    <div class="form-group row">
        Sexe
    </div>
    <div class="form-group row">
        <label class="mr-4"> <input type="radio" name="sexe" value="male" checked="checked"/> Masculin </label>
        <label> <input type="radio" name="sexe" value="female"/> Féminin </label>
    </div>

    <div class="form-group row">
        <label> Country <input type="text" name="country" class="form-control" value="<?=$data['countryName']?>"/>
        </label>
    </div>
    <div class="form-group row">
        <label> Job <input type="text" name="job" class="form-control"/> </label>
    </div>
    <input type="submit"/>
</form>

<?php
if (isset($data['error'])) {
    ?>
    <div class="alert alert-danger" role="alert"><?php
    echo $data['error'];
    ?></div><?php
}
?>
