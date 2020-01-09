<?php

require('Model/ConnexionBddModel.php');


function ajoutfilmbdd($titre, $date, $lieu){
    global $bdd;
    $requete = $bdd->prepare ("INSERT INTO `film`( titre_film, date_realisation, lieu_realisation) VALUES (:titrefilm, :datefilm, :lieufilm)");
    $requete->execute([
    ':titrefilm' => $titre,
    ':datefilm' => $date,
    ':lieufilm' => $lieu,
    ]);
}

