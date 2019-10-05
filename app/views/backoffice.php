<?php

$countriesGroup = $data['countriesGroup'];
foreach ($countriesGroup as $country => $users) {
    echo $country . "<br>";
    foreach ($users as $user)
        echo $user['name'] . " ";
    echo "<br><br>";
}
