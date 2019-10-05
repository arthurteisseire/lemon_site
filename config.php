<?php

require_once 'app/core/DataBaseSingleTon.php';

$host = "localhost";
$dbname = "lemon";
$port = "3306";

$username = "arthur";
$password = "arthur";

$dsn = "mysql:dbname=$dbname;host=$host;port=$port;charset=utf8";

DataBaseSingleTon::connect($dsn, $username, $password);
