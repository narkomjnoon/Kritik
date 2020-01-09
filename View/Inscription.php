
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="View/assets/style.css"/>
        <link rel="icon" type="image/png" href="View/image/logo.png" />
        <title> Inscription </title>
    </head>
    
    <?php require('Navbar.php')?>
    <body>
    <div class="blocsectionInsc">
        <div class="contenuInsc">
            <div class="contact">
                <h3>Inscription</h3>
                <form action="index.php?page=FormEnreg" method="post"><br>
                    <input class="entree" placeholder="Pseudo" type="text" name="pseudo"><br>
                    <input class="entree" placeholder="Mot de passe" type="text" name="mot_de_passe"><br>
                    <input class="entree" placeholder="E-mail" type="text" name="mail"><br>
                    <input class="entree" type="submit" value="Envoyer le formulaire">
                </form>
            </div>
        </div>
    </div>
    <?php require('Footer.php')?>
    <?php require('Script.php')?>
   </body>
</html>