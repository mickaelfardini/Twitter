<?php

require_once '../core/PDOConnection.php';

$array['dbname'] = "common-database";
$array['host'] = "localhost";
$array['user'] = "root";
$array['pwd'] = "";

$pdo = new PDOConnection($array);