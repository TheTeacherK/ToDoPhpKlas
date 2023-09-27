<?php

// de db credentials importeren  
require_once('db_credentials.php');


// functie om een connectie te leggen met de database.
//de functei vereist de gegevens voor aan te melden bij de DB
function db_connect()
{
    $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
    // confirm_db_connect();
    return $connection;
}

// functie om de verbinding met de DB te stoppen
function db_disconnect($connection)
{
    if (isset($connection)) {
        mysqli_close($connection);
    }
}

//functie om te kijken of onze resultaat set van een Qeury data bevat
function confirm_result_set($result_set)
{
    if (!$result_set) {
        exit("Database query failed");
    }
}

?>