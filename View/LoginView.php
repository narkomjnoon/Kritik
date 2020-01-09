<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
         <link rel="stylesheet" href="View/assets/style.css"/> 
         <link rel="icon" type="image/png" href="View/image/logo.png" />
        <title>Login</title>
    </head>
    <?php require_once("View/Navbar.php")?>
    <body>
        <div class="blocsectionLog">
            <div class="contenuLog">
                <div class="contact">
                    <h3>Autentification</h3>
                    <div>
                        <form id="formulaire" action="index.php?page=Auth" method="post">
                            <div >
                                <input class="entree" placeholder="Pseudo" type="text" name="username">
                            </div>
                            <div>
                                <input class="entree" placeholder="Mot de passe" type="password" name="password">
                            </div>
                            <div>
                                <input class="entree" type="submit" value="Login"></input>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <?php require('Footer.php')?>
    <?php require('Script.php')?>
    </body>

</html>