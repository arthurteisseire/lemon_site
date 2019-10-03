<?php

require_once 'app/core/DataBaseSingleTon.php';

$dsn = 'mysql:dbname=lemon;host=localhost;port=3306;charset=utf8';
$username = "arthur";
$pass = "arthur";

DataBaseSingleTon::connect($dsn, $username, $pass);
