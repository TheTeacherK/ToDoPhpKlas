<?php
include '../Private/shared/header.php';
include '../Private/init.php';


// opvragen URL parameter => Bij opvragen van de page GET
$taakid = $_GET['id'];


//dataset uit de DB halen op basis van ID van URL Parameter
$dataSet = GetTakenById($taakid);


?>


<main>
    <div class="container">
        <table>
            <thead>
                <tr>
                    <th>titel</th>
                    <th>beschrijving</th>
                    <th>status</th>
                    <th>Aangemaakt</th>
                    <th>Geupdated</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($dataSet as $task):

                    // de status van 1 of 0 omzetten naar iets begrijpbaar voor de gebruiker
                    if ($task['status'] == 1) {
                        $status = "Taak afgehandeld";
                    } else {
                        $status = "Taak niet afgehandeld";
                    }


                    ?>
                <tr>
                    <td>
                        <?php echo $task['titel']; ?>
                    </td>
                    <td>
                        <?php echo $task['beschrijving_lang']; ?>
                    </td>
                    <td>
                        <?php echo $status; ?>
                    </td>
                    <td>
                        <?php echo $task['created_at']; ?>
                    </td>
                    <td>
                        <?php echo $task['updated_at']; ?>
                    </td>
                </tr>
                <?php
                endforeach; ?>
            </tbody>
        </table>
    </div>
</main>


<?php
include '../Private/shared/footer.php'
    ?>