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
    printCol('<a href="/BackOffice/edit/' . $user['id'] . '">edit</a>
                    <a href="/BackOffice/delete/' . $user['id'] . '">delete</a>');
    foreach ($keys as $key)
        printCol($user[$key]);
    echo '</tbody>';
}

function printInfoRow($countryName)
{
    $keys = [$countryName . ' <a href="/BackOffice/add/' . $countryName . '">add</a>', 'NAME', 'FIRSTNAME', 'BIRTHDAY', 'MAIL', 'SEXE', 'COUNTRY', 'JOB'];
    echo '<thead><tr>';
    array_map('printCol', $keys);
    echo '</tr></thead>';
}

function printCol($data)
{
    echo '<td>' . $data . '</td>';
}
