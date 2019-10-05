<div class="container-fluid">

    <?php
    $countriesGroup = $data['countriesGroup'];
    foreach ($countriesGroup as $country => $users) {
        echo '<div>' . $country . "</div>";
        printInfoRow('NAME', 'FIRSTNAME', 'BIRTHDAY', 'MAIL', 'SEXE', 'COUNTRY', 'JOB');
        foreach ($users as $user)
            printUserRow($user);
        echo '<br><br>';
    }
    ?>

</div>

<?php
function printUserRow($user)
{
    echo '<div class="row">';
    printUserCol('
        <a href="BackOffice/edit/' . $user['id'] . '">edit</a>
        <a href="BackOffice/delete/' . $user['id'] . '">delete</a>
    ');
    $keys = ['name', 'firstname', 'birthday', 'mail', 'sexe', 'country', 'job'];
    array_map(function ($key) use ($user) {
        echo '<div class="col-sm">' . $user[$key] . '</div>';
    }, $keys);
    echo '</div>';
}

function printUserCol($data)
{
    echo '<div class="col-sm">' . $data . '</div>';
}

function printInfoRow(...$params)
{
    echo '<div class="row">';
    printInfoCol('<a href="BackOffice/add/1">add</a>');
    array_map('printInfoCol', $params);
    echo '</div>';
}

function printInfoCol($data)
{
    echo '<div class="col-sm" style="background-color: rgba(0, 0, 0, 0.5)">' . $data . '</div>';
}

?>
