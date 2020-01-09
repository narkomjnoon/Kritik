 <?php

require('Model/ConnexionBddModel.php');

function recupfilm(){
    global $bdd;
    $query = $bdd->prepare ("SELECT * FROM  film ;");
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}




// require('Model/ConnexionBddModel.php');

// function recupfilm(){
//     global $bdd;
//     $query = $bdd->prepare ("SELECT * FROM film INNER JOIN jouer_dans ON film.ID_film = jouer_dans.ID_film INNER JOIN acteurs ON jouer_dans.ID_acteur = acteurs.ID_acteur ;");
//     $query->execute();
//     $result = $query->fetchAll(PDO::FETCH_ASSOC);
//     return $result;
// }

