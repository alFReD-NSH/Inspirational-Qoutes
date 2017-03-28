<?php

include 'api/top.php';
include_once 'api/connection.php';
include_once 'api/quotes.php';

printQuotes($db->query('SELECT * FROM quote'), $config['random_pictures']);

include 'api/bottom.php';