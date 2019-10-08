<?php
$countriesGroup = $data['countriesGroup'];
foreach ($countriesGroup as $country => $users) {
    echo '<table class="table table-dark table-bordered">';
    printInfoRow($country);
    foreach ($users as $user)
        printUserRow($user);
    echo '</table>';
}

function printUserRow($user)
{
    $keys = ['name', 'firstname', 'birthday', 'mail', 'sexe', 'country', 'job'];
    echo '<tbody>';
    printCol('<a class="btn btn-danger" href="/BackOffice/delete/' . $user['id'] . '">x</a>
                    <a class="btn btn-primary" href="/BackOffice/edit/' . $user['id'] . '">edit</a>');
    foreach ($keys as $key)
        printCol($user[$key]);
    echo '</tbody>';
}

function printInfoRow($countryName)
{
    $head = "<p style='float: right'>$countryName</p><a class='btn btn-primary' style='float: left;' href='/BackOffice/add/$countryName'>add</a>";
    $keys = [$head, 'NAME', 'FIRSTNAME', 'BIRTHDAY', 'MAIL', 'SEXE', 'COUNTRY', 'JOB'];
    echo '<thead><tr>';
    array_map('printCol', $keys);
    echo '</tr></thead>';
}

function printCol($data)
{
    echo '<td>' . $data . '</td>';
}
