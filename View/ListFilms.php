<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="View/assets/style.css"/>
        <link rel="stylesheet" href="//developers.lucasvandenberg.fr/smaltify/import/css/smalt.css">
        <link rel="icon" type="image/png" href="View/image/logo.png" />
        <title> Les Films </title>   
    </head>
    <?php require('Navbar.php')?>
    <body>   
        <section class="blocsection">
            <article class="contenu">
                <?php  foreach ($result as  $value) { ?>
                    <div class="g-container grid-1 rows-1 w-95 m-a article"> 
                            <a class="col-1" href="index.php?page=DetailFilm&id=<?php echo $value['ID_film'] ?> " >
                                <img class="affiche" src="View\image\<?php echo ($value['titre_film']).".png" ?>">
                                <?php echo ($value['titre_film']) ?>
                                <?php //echo ($value['date_realisation']) ?>
                                <?php //echo ($value['lieu_realisation']) ?>
                                <!-- <button class="btn third">Détail</button> -->
                            </a>
                    </div>  
                <?php } ?>
        
            </article>
        <section>
    <?php require('Footer.php')?>
    <?php require('Script.php')?>
    </body>
</html>
