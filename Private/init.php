<?php

// start file die alle nodige bestanden inlaad voor onze app

require_once('database.php');
require_once('db_credentials.php');
require_once('function.php');
require_once('query_functions.php');

// var voor connectie te leggen met de DB
// in heel project beschikbaar maken.
$link = db_connect();

?>