<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>partie 6 exercice 3</title>
    </head>
    <body>
        <a href="index.php?startDate=2/05/2016&amp;endDate=27/11/2016">Clique ici !</a>
        <?php 
            if (isset($_GET['startDate']) && isset($_GET['endDate'])) {
                echo '<p> la formation debute le ' . $_GET['startDate'] . ' et ce fini le ' . $_GET['endDate'] . '</p>';
            }
        ?>
    </body>
</html>