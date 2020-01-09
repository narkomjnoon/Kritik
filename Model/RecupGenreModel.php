<?php

require('Model/ConnexionBddModel.php');

// function recupgenrefilm(){
//     global $bdd;
//     $query = $bdd->prepare ("SELECT * FROM film INNER JOIN est_de ON film.ID_film = est_de.ID_film INNER JOIN genre ON est_de.ID_genre = genre.ID_genre WHERE Nom_genre ='Romance';");
//     $query->execute();
//     $result = $query->fetchAll(PDO::FETCH_ASSOC);
//     return $result;
// }



function recupgenrefilm($id){
    global $bdd;
    $query = $bdd->prepare ("SELECT * FROM film INNER JOIN est_de ON film.ID_film = est_de.ID_film INNER JOIN genre ON est_de.ID_genre = genre.ID_genre  WHERE genre.ID_genre = ?");
    $query->execute([$id]);
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    return $result;
};