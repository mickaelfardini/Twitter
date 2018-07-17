<?php

require_once '../core/PDOConnect.php';

$array['dbname'] = "common-database";
$array['host'] = "127.0.0.1";
$array['user'] = "root";
$array['pwd'] = "vegeta883";

$pdo = new PDOConnection($array);