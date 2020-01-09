<?php

require('Model/ConnexionBddModel.php');

function ajoutrealbdd($nom, $prenom, $date, $lieu){
    global $bdd;
    $requete = $bdd->prepare ("INSERT INTO `realisateur`( Nom_realisateur, Prenom_realisateur, Date_naissance, Lieu_naissance) VALUES (:nom, :prenom, :date, :lieu)");
    $requete->execute([
        ':nom' => $nom,
        ':prenom' => $prenom,
        ':date' => $date,
        ':lieu' => $lieu,
    ]);
}