<form method="post" action="../Register" class="col mx-4 my-4">
    <div class="form-group row">
        <label> Nom <input type="text" name="name" class="form-control"/> </label>
    </div>
    <div class="form-group row">
        <label> Prénom <input type="text" name="firstname" class="form-control"/> </label>
    </div>
    <div class="form-group row">
        <label> Date de Naissance <input type="date" name="birthday" class="form-control"/> </label>
    </div>
    <div class="form-group row">
        <label> Mail <input type="email" name="mail" class="form-control"/> </label>
    </div>

    <div class="form-group row">
        Sexe
    </div>
    <div class="form-group row">
        <label class="mr-4"> <input type="radio" name="sexe" value="male"/> Masculin </label>
        <label> <input type="radio" name="sexe" value="female"/> Féminin </label>
    </div>

    <div class="form-group row">
        <label> Pays <input type="text" name="country" class="form-control"/> </label>
    </div>
    <div class="form-group row">
        <label> Métier <input type="text" name="job" class="form-control"/> </label>
    </div>
    <input type="submit"/>
</form>
