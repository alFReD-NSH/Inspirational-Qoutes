<?php

include 'api/top.php';
include_once 'api/connection.php';
include_once 'api/quotes.php';
$stmt = $db->prepare("SELECT * FROM quote WHERE text LIKE ? or AUTHOR LIKE ? or GENRE LIKE ?");
$query = "%{$_GET['query']}%";
$stmt->execute(array($query, $query, $query));
printQuotes($stmt, $config['random_pictures']);

include 'api/bottom.php';