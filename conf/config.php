<?php

require_once '../core/PDOConnection.php';

$array['dbname'] = "common-database";
$array['host'] = "localhost";
$array['user'] = "root";
$array['pwd'] = "R00t1234";

$pdo = new PDOConnection($array);