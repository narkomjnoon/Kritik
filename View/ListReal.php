<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="View/assets/style.css"/>
        <link rel="stylesheet" href="//developers.lucasvandenberg.fr/smaltify/import/css/smalt.css">
        <link rel="icon" type="image/png" href="View/image/logo.png" />
        <title> Les Réalisateurs </title>   
    </head>
    <?php require('Navbar.php')?>
    <body>
        <section class="blocsection">
            <article class="contenu">
                <?php  foreach ($result as  $value) { ?>
                    <div class="g-container grid-1 rows-1 w-95 m-a article">
                        <div>
                            <img class="affiche" src="View\image\<?php echo ($value['Nom_realisateur']).".png" ?>" width="150" height="200">
                            <?php echo ($value['Nom_realisateur']) ?>
                            <?php echo ($value['Prenom_realisateur']) ?>
                            <?php echo ($value['Date_naissance']) ?>
                        </div>
                    </div>
                
                <?php } ?>
            </article>
        <section>
    <?php require('Footer.php')?>
    <?php require('Script.php')?>
    </body>

</html>

