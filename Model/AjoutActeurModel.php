<?php

require('Model/ConnexionBddModel.php');

function ajoutacteurbdd($nom, $prenom, $date, $lieu){
    global $bdd;
    $requete = $bdd->prepare ("INSERT INTO `acteurs`( Nom_acteur, Prenom_acteur, Date_naissance, Lieu_naissance) VALUES (:nomact, :prenomact, :dateact, :lieuact)");
    $requete->execute([
        ':nomact' => $nom,
        ':prenomact' => $prenom,
        ':dateact' => $date,
        ':lieuact' => $lieu,
    ]);
}