<?php
  
 

require('Model/ConnexionBddModel.php');

// function recupDetailfilm(){
//     global $bdd;
//     $query = $bdd->prepare ("SELECT * FROM  film ;");
//     $query->execute();
//     $result = $query->fetchAll(PDO::FETCH_ASSOC);
//     return $result;

// }

function recupDetailfilm($id){
    global $bdd;
    $query = $bdd->prepare ("SELECT * FROM film INNER JOIN jouer_dans ON film.ID_film = jouer_dans.ID_film INNER JOIN acteurs ON jouer_dans.ID_acteur = acteurs.ID_acteur WHERE film.ID_film = ?");
    $query->execute([$id]);
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    return $result;
};

function recupDetailfilm1($id){
    global $bdd;
    $query = $bdd->prepare ("SELECT * FROM film INNER JOIN realiser ON film.ID_film = realiser.ID_film INNER JOIN realisateur ON realiser.ID_realisateur = realisateur.ID_realisateur WHERE film.ID_film = ?");
    $query->execute([$id]);
    $result1 = $query->fetchAll(PDO::FETCH_ASSOC);
    return $result1;
};

function recupDetailfilm2($id){
    global $bdd;
    $query = $bdd->prepare ("SELECT * FROM film INNER JOIN est_de ON film.ID_film = est_de.ID_film INNER JOIN genre ON est_de.ID_genre = est_de.ID_genre WHERE film.ID_film = ?");
    $query->execute([$id]);
    $result2 = $query->fetchAll(PDO::FETCH_ASSOC);
    return $result2;
};

