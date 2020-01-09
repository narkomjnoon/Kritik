<?php

require('Model/ConnexionBddModel.php');

function recupinfofilm(){
    global $bdd;
    $query = $bdd->prepare  ("SELECT * FROM film INNER JOIN jouer_dans ON film.ID_film = jouer_dans.ID_film INNER JOIN acteurs ON jouer_dans.ID_acteur = acteurs.ID_acteur ;");
    $query->execute();
    $resultat = $query->fetchAll(PDO::FETCH_ASSOC);
    return $resultat;
};