
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="View/assets/style.css"/>
        <link rel="icon" type="image/png" href="View/image/logo.png" />
        <title> Formulaire d'ajout de films </title>
    </head>
    <body>
        <?php require('Navbar.php')?>
        <section class="blocsection">
            <article class="contenu">
                <div class="contact">
                    <h3>Realisateur</h3>
                    <form action="index.php?page=FormReal" method="post">
                        <input class="entree" placeholder="Nom" type="text" name="name">
                        <input class="entree" placeholder="Prénom" type="text" name="prenom">
                        <input class="entree" placeholder="Date de naissance" type="text" name="date">
                        <input class="entree" placeholder="Lieu de naissance" type="text" name="lieu">
                        <input class="entree" type="submit" value="Envoyer le formulaire">
                    </form>
                </div>
                <div class="contact">
                    <h3>Acteur</h3>
                    <form action="index.php?page=FormAct" method="post">
                        <input class="entree" placeholder="Nom" type="text" name="nameact">
                        <input class="entree" placeholder="Prénom" type="text" name="prenomact">
                        <input class="entree" placeholder="Date de naissance" type="text" name="dateact">
                        <input class="entree" placeholder="Lieu de naissance" type="text" name="lieuact">
                        <input class="entree" type="submit" value="Envoyer le formulaire">
                    </form>
                </div>
                <div class="contact">
                    <h3>Film</h3>
                    <form action="index.php?page=FormFilm" method="post">
                        <input class="entree" placeholder="Titre" type="text" name="titrefilm">
                        <input class="entree" placeholder="Date sortie" type="text" name="datefilm">
                        <input class="entree" placeholder="Nationalité" type="text" name="lieufilm">
                        <input class="entree" type="submit" value="Envoyer le formulaire">
                    </form>
                </div>
                <div class="contact">
                    <h3>Genre</h3>
                    <form action="index.php?page=FormGenre" method="post">
                        <input class="entree" placeholder="Nom de genre" type="text" name="namegenre">
                        <input class="entree" type="submit" value="Envoyer le formulaire">
                    </form>
                </div>
            </article>
        </section>    
    <?php require('Footer.php')?>
    <?php require('Script.php')?>
   </body>
</html>