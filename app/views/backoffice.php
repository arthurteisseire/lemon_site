<?php
$countriesGroup = $data['countriesGroup'];
foreach ($countriesGroup as $country => $users) {
    echo '<table class="table table-bordered table-striped mb-4">';
    printInfoRow($country);
    foreach ($users as $user)
        printUserRow($user);
    echo '</table>';
}

function printUserRow($user)
{
    $keys = ['id', 'name', 'firstname', 'birthday', 'mail', 'sexe', 'country', 'job'];
    echo '<tbody><td></td>';
    foreach ($keys as $key)
        printCol($user[$key]);
    printCol('<a class="btn btn-primary" href="/BackOffice/edit/' . $user['id'] . '">edit</a>
                    <a class="btn btn-danger" href="/BackOffice/delete/' . $user['id'] . '">x</a>');
    echo '</tbody>';
}

function printCol($data)
{
    echo '<td style="text-align: center">' . $data . '</td>';
}

function printInfoRow($countryName)
{
    $addButton = "<a class='btn btn-primary' href='/BackOffice/add/$countryName'>add</a>";
    $keys = ['id', 'name', 'firstname', 'birthday', 'mail', 'sexe', 'country', 'job'];
    echo '<thead class="thead-dark"><tr>';
    printInfoCol($countryName);
    array_map('printInfoCol', $keys);
    printInfoCol($addButton);
    echo '</tr></thead>';
}

function printInfoCol($data)
{
    echo '<th style="text-align: center">' . $data . '</th>';
}
