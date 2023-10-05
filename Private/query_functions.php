<?php

// functie die in de DB alle gegeven uit de tabel taken haalt
// de return is het resutaat van de query in  een array
function GetTaken()
{

    global $link;

    $sql = "SELECT * FROM taken";
    $result = mysqli_query($link, $sql);
    confirm_result_set($result);
    return $result;

}

// functie die in de DB de gegevens van 1 taak weergeeft gebasserd op de id van de taak
// de return is het resutaat van de query in  een array
function GetTakenById($id)
{

    global $link;

    $sql = "SELECT * FROM taken WHERE id = $id";
    $result = mysqli_query($link, $sql);
    confirm_result_set($result);
    return $result;

}



// functie om een nieuwe taak in de DB te bewaren met als parameter een array
// die de nodige info over de taak bewaard.
function create_Taak($taakinfo)
{
    global $link;

    // lokale variable maken om de gegevens uit de array te halen
    $taakinsert = $taakinfo['titel'];
    $taakbeschinsert = $taakinfo['beschrijving_lang'];

    // SQL statement
                                                            // we verwachten een string door ' ' rond onze var te zetten , zetten we de inhoud om naar een string
    $sql = "INSERT INTO taken(titel,beschrijving_lang) VALUES( ' $taakinsert ' , ' $taakbeschinsert' )";

    // connectie en query op de DB los laten
    $result = mysqli_query($link, $sql);

    // indien resultaat true is van onze query
    if ($result) {
        // geven we de waarde true door 
        return true;
    } else {
        // geven we een error en sluiten de connectie met de DB
        echo mysqli_error($link);
        db_disconnect($link);
        exit;
    }

}

// functie om een taak te updaten. 
// we hebben als paramater de taak iD en de nieuwe info voor de taak
function update_taakstatus($id, $nieuwestaat)
{
    global $link;

    $sql = "UPDATE taken SET status = $nieuwestaat WHERE id = $id LIMIT 1";
    $result = mysqli_query($link, $sql);
    if ($result) {
        header("location: show.php?id=$id ");
        return true;

    }

}


// functie om een taak te verwijderen uit de DB
// paramater: de taak id
// limit op 1. Max 1 taak verwijderen
function delete_taak($id)
{
    global $link;

    $sql = "DELETE FROM taken WHERE id =$id LIMIT 1 ";
    $result = mysqli_query($link, $sql);
    if ($result) {
        return true;
    }



}



?>