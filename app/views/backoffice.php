<div class="container-fluid">

    <?php
    $countriesGroup = $data['countriesGroup'];
    foreach ($countriesGroup as $country => $users) {
        echo $country . "<br><br>";
        echo '<div class="row">';
        echo '<div class="col-sm">name</div>';
        echo '<div class="col-sm">firstname</div>';
        echo '<div class="col-sm">birthday</div>';
        echo '<div class="col-sm">mail</div>';
        echo '<div class="col-sm">sexe</div>';
        echo '<div class="col-sm">country</div>';
        echo '<div class="col-sm">job</div>';
        echo '</div>';
        foreach ($users as $user) {
            echo '<div class="row">';
            echo '<div class="col-sm">' . $user['name'] . '</div>';
            echo '<div class="col-sm">' . $user['firstname'] . '</div>';
            echo '<div class="col-sm">' . $user['birthday'] . '</div>';
            echo '<div class="col-sm">' . $user['mail'] . '</div>';
            echo '<div class="col-sm">' . $user['sexe'] . '</div>';
            echo '<div class="col-sm">' . $user['country'] . '</div>';
            echo '<div class="col-sm">' . $user['job'] . '</div>';
            echo '</div>';
        }
        echo '<br><br>';
    }
    ?>

</div>
