<div class="container-fluid">

    <?php
    $countriesGroup = $data['countriesGroup'];
    foreach ($countriesGroup as $country => $users) {
        echo '<div>' . $country . "</div>";
        printInfoRow('NAME', 'FIRSTNAME', 'BIRTHDAY', 'MAIL', 'SEXE', 'COUNTRY', 'JOB');
        foreach ($users as $user)
            printUserRow($user['name'], $user['firstname'], $user['birthday'], $user['mail'], $user['sexe'],
                $user['country'], $user['job']);
        echo '<br><br>';
    }
    ?>

</div>

<?php
function printUserRow(...$params)
{
    echo '<div class="row">';
    echo '<div class="col-sm">
            <button>edit</button>
            <button>delete</button>
          </div>';
    array_map('printUserCol', $params);
    echo '</div>';
}

function printUserCol($data)
{
    echo '<div class="col-sm">' . $data . '</div>';
}

function printInfoRow(...$params)
{
    echo '<div class="row">';
    printInfoCol('<button>add</button>');
    array_map('printInfoCol', $params);
    echo '</div>';
}

function printInfoCol($data)
{
    echo '<div class="col-sm" style="background-color: rgba(0,0,0,0.5)">' . $data . '</div>';
}

?>
