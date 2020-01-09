<!DOCTYPE html>
<html lang="fr">
        <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Les Films par genres</title>
        <link rel="stylesheet" href="View/assets/style.css"/>
        <link rel="stylesheet" href="//developers.lucasvandenberg.fr/smaltify/import/css/smalt.css">
        <link rel="icon" type="image/png" href="View/image/logo.png" />
        </head>
        <?php require('Navbar.php')?>
        <body> 
                <section class="blocsection">
                        <article class="contenu">    
                        <?php foreach ($result as  $value) { ?> 
                                <div class="g-container grid-1 rows-1 w-95 m-a article"> 
                                <a  class="col-1" href="index.php?page=DetailFilm&id=<?php echo $value['ID_film'] ?> " >                                  
                                        <img class="affiche" src="View\image\<?php echo ($value['titre_film']).".png" ?>" width="150" height="200">
                                        <?php echo ($value['titre_film']) ?>
                                </a>
                        </div>
                        <?php } 
                        ?>
                        </article>
                </section>
                <?php require('Footer.php')?>
    <?php require('Script.php')?>
        </body>
</html>

