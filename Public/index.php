<?php
//header include in de index
include '../Private/shared/header.php';

//startbestand met functies en database connectie inladen
include '../Private/init.php';

// data opvragen aan de hand van functie
$dataSet = GetTaken();
?>

<main>
    <div class="container">
        <table>
            <thead>
            </thead>
            <tbody>
                <!-- Loop over de array met rusultaten van de query --->
                <?php foreach ($dataSet as $task): ?>
                <tr>
                    <td>
                        <!-- We maken een link en geven een URL Parameter mee
                            met de aam id. We geven deze de waarde van de taak id -->
                        <a href="<?php echo 'show.php?id=' . $task['id'] ?>">
                            <?php echo $task['id']; ?>
                        </a>
                    </td>

                    <?php

                        // We doorstrepen de taak titel met de tag <s></s> als een taak afgehandeld is
                        if ($task['status'] == 1) {
                            echo "<td><s>" . $task['titel'] . "</s></td>";
                        } else {
                            echo "<td>" . $task['titel'] . "</td>";
                        }
                        ?>

                </tr>
                <!-- einde van de loop -->
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</main>

<!-- de footer include -->
<?php
include '../Private/shared/footer.php';
?>