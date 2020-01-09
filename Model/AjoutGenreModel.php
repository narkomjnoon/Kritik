<?php

require('Model/ConnexionBddModel.php');

function ajoutgenrebdd($nom){
    global $bdd;
    $requete = $bdd->prepare ("INSERT INTO `genre`( Nom_genre) VALUES (:nomgenre)");
    $requete->execute([
    ':nomgenre' => $nom
    ]);
}