<?php

function GetTaken()
{

    global $link;

    $sql = "SELECT * FROM taken";
    $result = mysqli_query($link, $sql);
    confirm_result_set($result);
    return $result;

}

function GetTakenById($id)
{

    global $link;

    $sql = "SELECT * FROM taken WHERE id = $id";
    $result = mysqli_query($link, $sql);
    confirm_result_set($result);
    return $result;

}




?>