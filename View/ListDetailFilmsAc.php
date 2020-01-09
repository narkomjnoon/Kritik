<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="View/assets/style.css"/> 
        <link rel="icon" type="image/png" href="View/image/logo.png" />
        <title>Film</title>
    </head>
    <?php require_once("View/Navbar.php")?>
    <body>
        <section class="blocsection detail">
            <article class="contenu">
                <?php
                foreach ($result as  $value) {?> 
                <br>
                    <h2><?php echo $value['titre_film']?></h2>        
                    <img class="affichefilm" src="View\image\<?php echo ($value['titre_film']).".png" ?>">
                <br>
                <hr>
                <br>
                <?php } ?>   
            </article>
        </section>
        <?php require('Footer.php')?>
    <?php require('Script.php')?>
    </body>
</html>

