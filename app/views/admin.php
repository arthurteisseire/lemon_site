<form method="post" action="BackOffice" class="col mx-4 my-4">
    <div class="form-group row">
        <label> Mail <input type="email" name="mail" class="form-control"/> </label>
    </div>
    <div class="form-group row">
        <label> Password <input type="password" name="password" class="form-control"/> </label>
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
