<?php
$user = $data['user'];
?>

<form method="post" action="/BackOffice/save/<?= $user->getId() ?>" class="col mx-4 my-4">
    <div class="form-group row">
        <label> Name <input type="text" name="name" class="form-control" value="<?= $user->getName() ?>"/> </label>
    </div>
    <div class="form-group row">
        <label> Firstname <input type="text" name="firstname" class="form-control"
                                 value="<?= $user->getFirstname() ?>"/>
        </label>
    </div>
    <div class="form-group row">
        <label> Birthday <input type="date" name="birthday" class="form-control" value="<?= $user->getBirthday() ?>"/>
        </label>
    </div>
    <div class="form-group row">
        <label> Mail <input type="email" name="mail" class="form-control" value="<?= $user->getMail() ?>"/> </label>
    </div>

    <div>
        <div class="form-group row">
            Sexe
        </div>
        <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="customRadioInline1" name="sexe" value="male"
                <?php if ($user->getSexe() == 'male')
                    echo 'checked="checked"' ?> class="custom-control-input">
            <label class="custom-control-label" for="customRadioInline1">Male</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="customRadioInline2" name="sexe" value="female"
                <?php if ($user->getSexe() == 'female')
                    echo 'checked="checked"' ?> class="custom-control-input">
            <label class="custom-control-label" for="customRadioInline2">Female</label>
        </div>
    </div>

    <div class="form-group row mt-4">
        <label>
            Country
            <select name="country" class="form-control">
                <?php foreach ($data['countries'] as $country) { ?>
                    <option
                        <?php if ($country == $user->getCountry()) { ?>
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
        <label> Job <input type="text" name="job" class="form-control" value="<?= $user->getJob() ?>"/></label>
    </div>
    <div class="form-group row">
        <label> isAdmin <input type="text" name="isAdmin" class="form-control" value="<?= $user->isAdmin() ?>"/></label>
    </div>
    <input type="submit" class="btn btn-primary" value="save"/>
</form>
