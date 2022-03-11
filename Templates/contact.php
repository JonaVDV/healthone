<!DOCTYPE html>
<html>
<?php
global $Opentimes;

include_once('defaults/head.php');
?>

<body>
    <?php
    // include_once('defaults/header.php');
    include_once('defaults/menu.php');

    ?>

    <header>
        <?php include_once('defaults/pictures.php'); ?>
    </header>
    <main>

        <section class="table-container">
                
                <table class="times">
                <tr>
                    <th>dag</th>
                    <th>openings tijden</th>
                    <th>sluitings tijden</th>
                </tr>
            <?php foreach ($Opentimes as $time) : ?>
                    <tr>
                        <td><?= $time->day ?></td>
                        <td><?= $time->opening_time ?></td>
                        <td><?= $time->closing_time ?></td>
                    </tr>
                    <?php endforeach; ?>
            </table>
        </section>
    </main>
</body>

</html>