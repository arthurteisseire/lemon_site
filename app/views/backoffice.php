<div class="container-fluid">

    <?php
    $countriesGroup = $data['countriesGroup'];
    foreach ($countriesGroup as $country => $users) {
        echo $country . "<br><br>";
        printRow('name', 'firstname', 'birthday', 'mail', 'sexe', 'country', 'job');
        foreach ($users as $user)
            printRow($user['name'], $user['firstname'], $user['birthday'], $user['mail'], $user['sexe'], $user['country'], $user['job']);
        echo '<br><br>';
    }
    ?>

</div>

<?php
function printRow(...$params)
{
    echo '<div class="row">';
    foreach ($params as $param)
        printCol($param);
    echo '</div>';
}

function printCol($data)
{
    echo '<div class="col-sm">' . $data . '</div>';
}
