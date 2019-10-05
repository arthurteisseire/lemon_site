<div class="container-fluid">
    <?php
    $countriesGroup = $data['countriesGroup'];
    foreach ($countriesGroup as $country => $users) {
        printCol($country);
        printInfoRow($country);
        foreach ($users as $user)
            printUserRow($user);
    }
    ?>
</div>

<?php
function printUserRow($user)
{
    echo '<div class="row mb-4">';
    printCol('<a href="/BackOffice/edit/' . $user['id'] . '">edit</a>
                    <a href="/BackOffice/delete/' . $user['id'] . '">delete</a>');
    $keys = ['name', 'firstname', 'birthday', 'mail', 'sexe', 'country', 'job'];
    foreach ($keys as $key)
        printCol($user[$key]);
    echo '</div>';
}

function printInfoRow($countryName)
{
    $keys = ['NAME', 'FIRSTNAME', 'BIRTHDAY', 'MAIL', 'SEXE', 'COUNTRY', 'JOB'];
    echo '<div class="row">';
    printCol('<a href="/BackOffice/add/' . $countryName . '">add</a>');
    array_map('printCol', $keys);
    echo '</div>';
}

function printCol($data)
{
    echo '<div class="col-sm">' . $data . '</div>';
}
