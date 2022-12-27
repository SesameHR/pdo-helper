<?php

// determine the test environment first
if (getenv('TRAVIS')) {
    $pdo = new PDO("mysql:dbname=fluentdb;host=127.0.0.1;charset=utf8", "root");
}
else {
    $pdo = new PDO("mysql:dbname=fluentdb;host=127.0.0.1;charset=utf8", "vagrant", "vagrant");
}

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
$pdo->setAttribute(PDO::ATTR_CASE, PDO::CASE_LOWER);
