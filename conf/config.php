<?php

require_once '../core/PDOConnection.php';

$array['dbname'] = "common-database";
$array['host'] = "127.0.0.1";
$array['user'] = "root";
$array['pwd'] = "";

$pdo = new PDOConnection($array);