<?php
include '../Private/shared/header.php';
include '../Private/init.php';

// controleren of we eeen POST doen op create.php
//zoja, deze code 
if (is_post_request()) {

    //nieuwe array maken
    $nieuwetaak = [];
    //aray opvullen met de data uit het formulier
    $nieuwetaak['titel'] = $_POST['titel'];
    $nieuwetaak['beschrijving_lang'] = $_POST['beschrijving_lang'];

    // data naar de DB
    $result = create_Taak($nieuwetaak);
    if ($result === true) {
    // indien query goed is uitgveoerd , redirecten naar index pagina
        header("location: index.php");
    }


}

// GET request op create.php
else {

}

?>


<main>
    <!-- we behandelen onze formulier data op dezelfde pagina dus de action verwijst naar
    de pagina waar we al op zitten -->
    <form action="create.php" method="POST">
        <label for="titelLabel">Geef de titel van een taak</label>
        <input type="text" id="titelLabel" name="titel">

        <label for="beschrijving">Beschrijf de taak</label>
        <input type="text" id="beschrijving" name="beschrijving_lang">

        <input type="submit" value="maak aan">
    </form>


</main>







<?php
include '../Private/shared/footer.php';
?>