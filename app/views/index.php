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
        <label> Password <input type="password" name="password" class="form-control"/> </label>
    </div>

    <div>
        <div class="form-group row">
            Sexe
        </div>
        <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="customRadioInline1" name="sexe" value="male" checked="checked"
                   class="custom-control-input">
            <label class="custom-control-label" for="customRadioInline1">Male</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="customRadioInline2" name="sexe" value="female" class="custom-control-input">
            <label class="custom-control-label" for="customRadioInline2">Female</label>
        </div>
    </div>

    <div class="form-group row">
        <label>
            Country
            <select name="country" class="form-control">
                <?php foreach ($data['countries'] as $country) { ?>
                    <option
                        <?php if ($country == $data['countryName']) { ?>
                            selected="selected"
                        <?php } ?>
                    >
                        <?php echo $country; ?>
                    </option>
                <?php } ?>
            </select>
        </label>
    </div>
    <div class="form-group row">
        <label> Job <input type="text" name="job" class="form-control"/> </label>
    </div>
    <input type="submit" class="btn btn-primary"/>
</form>

<?php
if (isset($data['error'])) {
    ?>
    <div class="alert alert-danger" role="alert"><?php
    echo $data['error'];
    ?></div><?php
}
?>
