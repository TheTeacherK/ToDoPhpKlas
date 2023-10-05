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




function create_Taak($taakinfo)
{
    global $link;

    $taakinsert = $taakinfo['titel'];
    $taakbeschinsert = $taakinfo['beschrijving_lang'];

    $sql = "INSERT INTO taken(titel,beschrijving_lang) VALUES( ' $taakinsert ' , ' $taakbeschinsert' )";

    $result = mysqli_query($link, $sql);

    if ($result) {
        return true;
    } else {
        echo mysqli_error($link);
        db_disconnect($link);
        exit;
    }

}


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