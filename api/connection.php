<?php

$config = parse_ini_file('api/config.ini');
$dsn = sprintf('mysql:host=%s;dbname=%s;', $config['host'], $config['db']);
$db = new PDO($dsn, $config['username'], $config['password']);