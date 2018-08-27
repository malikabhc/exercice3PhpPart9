<?php //Modifie la localisation en France
setlocale(LC_ALL, 'fr_FR.utf-8'); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Exercice 3/9</title>
    </head>
    <body>
        <p><?= date('l d F Y'); ?></p>
        <p><?= //Affichage de la date du jour en français
        strftime('%A, %e, %B, %Y');?></p>
    </body>
</html>
