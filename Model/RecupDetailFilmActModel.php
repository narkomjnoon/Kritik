<?php

require('Model/ConnexionBddModel.php');

function recupfilm($id){
    global $bdd;
    
    // $query = $bdd->prepare ("SELECT * FROM film INNER JOIN jouer_dans ON film.ID_film = jouer_dans.ID_film INNER JOIN acteurs ON jouer_dans.ID_acteur = acteurs.ID_acteur WHERE film.ID_film = ?");

    $query = $bdd->prepare ("SELECT * FROM film INNER JOIN jouer_dans ON film.ID_film = jouer_dans.ID_film INNER JOIN acteurs ON jouer_dans.ID_acteur = acteurs.ID_acteur WHERE acteurs.ID_acteur= ?");

    $query->execute([$id]);
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    return $result;
};

?>```
