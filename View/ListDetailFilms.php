 <?php
$titre = "";
foreach ($result as $value){
$titre = $value ['titre_film'];}

?> 

<html>
    <head>
        <title> Les Films </title>
        <link rel="stylesheet" href="View/assets/style.css"/>
        <link rel="icon" type="image/png" href="View/image/logo.png" />
    </head>
    <?php require('Navbar.php')?>
    <body>
        <section class="blocsection detail">
            <article class="contenu">
                <h1><?php echo $titre ?></h1>
                <img class="affichefilm" src="View\image\<?php echo ($value['titre_film']).".png" ?>">
                <h2>Acteurs</h2>
                <?php  foreach ($result as  $value) { ?>
                    <div class="g-container grid-1 rows-4 w-95 m-a article">  
                        <div>
                            <img class="affiche" src="View\image\<?php echo ($value['Nom_acteur']).".png" ?>">
                            <?php echo ($value['Prenom_acteur']) ?></td>
                            <?php echo ($value['Nom_acteur']) ?></td>
                        </div>
                    </div>
                <?php } ?>
                <br><br>
                <h2>Réalisateurs</h2>       
                <?php  foreach ($result1 as  $value) { ?>
                    <div class="g-container grid-1 rows-4 w-95 m-a article">  
                        
                        <div>
                            <img class="affiche" src="View\image\<?php echo ($value['Nom_realisateur']).".png" ?>" width="100" height="120">  
                            <?php echo ($value['Prenom_realisateur']) ?></td>
                            <?php echo ($value['Nom_realisateur']) ?></td>
                        </div>
                    </div>
                <?php } ?>
            </article>
        </section>   
        <?php require('Footer.php')?>
    <?php require('Script.php')?>                     
    </body>

</html>