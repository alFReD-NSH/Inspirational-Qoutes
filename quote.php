<?php

include 'api/top.php';
include_once 'api/connection.php';
include_once 'api/quotes.php';

$var = isset($_GET['genre']) ? 'genre' : 'id';
$stmt = $db->prepare("SELECT * FROM quote where $var=?");
$stmt->execute(array($_GET[$var]));
printQuotes($stmt, $config['random_pictures']);

include 'api/bottom.php';