<?php

// controle of er een POST gedaan is

function is_post_request()
{
    return $_SERVER['REQUEST_METHOD'] == 'POST';
}



?>