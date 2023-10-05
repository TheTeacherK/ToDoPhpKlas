<?php
include '../Private/shared/header.php';
include '../Private/init.php';


// opvragen URL parameter => Bij opvragen van de page GET
$taakid = $_GET['id'];

if (is_post_request()) {

    $result = delete_taak($taakid);
    header("location: index.php");

} else {
    $dataSet = GetTakenById($taakid);
}


?>


<main>

    <div class="container">


        <table>
            <thead>
                <tr>
                    <th>titel</th>
                    <th>beschrijving</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($dataSet as $task):

                    ?>

                    <tr>
                        <td>
                            <?php echo $task['titel']; ?>
                        </td>
                        <td>
                            <?php echo $task['beschrijving_lang']; ?>
                        </td>

                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>


        <h2 style="color:red;"> wil je de taak verwijderen ? </h2>

        <form action="" method="POST">
            <button type="submit" name="commit">DELETE!!!</button>
        </form>

    </div>

</main>


<?php include '../Private/shared/footer.php' ?>