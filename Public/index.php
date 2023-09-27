<?php
include '../Private/shared/header.php';
include '../Private/init.php';

$dataSet = GetTaken();
?>

<main>
    <div class="container">
        <table>
            <thead>
            </thead>
            <tbody>
                <?php foreach ($dataSet as $task): ?>
                    <tr>
                        <td>
                            <a href="<?php echo 'show.php?id=' . $task['id'] ?>">
                                <?php echo $task['id']; ?>
                            </a>
                        </td>

                        <?php

                        if ($task['status'] == 1) {
                            echo "<td><s>" . $task['titel'] . "</s></td>";
                        } else {
                            echo "<td>" . $task['titel'] . "</td>";
                        }



                        ?>

                        <?php echo $task['titel']; ?>

                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</main>

<?php
include '../Private/shared/footer.php';
?>