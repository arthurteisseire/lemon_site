<?php
$user = $data['user'];
?>

<form method="post" action="/BackOffice/save" class="col mx-4 my-4">
    <div class="form-group row">
        <label> Name <input type="text" name="name" class="form-control" value="<?=$user['name']?>"/> </label>
    </div>
    <div class="form-group row">
        <label> Firstname <input type="text" name="firstname" class="form-control" value="<?=$user['firstname']?>"/>
        </label>
    </div>
    <div class="form-group row">
        <label> Birthday <input type="date" name="birthday" class="form-control" value="<?=$user['birthday']?>"/>
        </label>
    </div>
    <div class="form-group row">
        <label> Mail <input type="email" name="mail" class="form-control" value="<?=$user['mail']?>"/> </label>
    </div>

    <div>
        <div class="form-group row">
            Sexe
        </div>
        <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="customRadioInline1" name="sexe" value="male"
                <?php if ($user['sexe'] == 'male') echo 'checked="checked"'?> class="custom-control-input">
            <label class="custom-control-label" for="customRadioInline1">Male</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="customRadioInline2" name="sexe" value="female"
                <?php if ($user['sexe'] == 'female') echo 'checked="checked"'?> class="custom-control-input">
            <label class="custom-control-label" for="customRadioInline2">Female</label>
        </div>
    </div>

    <div class="form-group row mt-4">
        <label>
            Country
            <select name="country" class="form-control">
                <?php foreach ($data['countries'] as $country) { ?>
                    <option
                        <?php if ($country == $user['country']) { ?>
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
        <label> Job <input type="text" name="job" class="form-control" value="<?=$user['job']?>"/> </label>
    </div>
    <input type="submit" class="btn btn-primary" value="save"/>
</form>
