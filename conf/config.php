<?php

require_once '../core/PDOConnect.php';

$array['dbname'] = "tweeter";
$array['host'] = "127.0.0.1";
$array['user'] = "root";
$array['pwd'] = "";

$pdo = new PDOConnection($array);