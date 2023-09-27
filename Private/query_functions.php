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




?>