<?php

require('Model/ConnexionBddModel.php');


function ajoutrecompensebdd($nom, $date, $lieu){
    global $bdd;
    $requete = $bdd->prepare ("INSERT INTO `recompense`( Nom_recompense, Lieu_recompense, Date_recompense) VALUES (:namerecompense, :lieurecompense, :daterecompense)");
    $requete->execute([
        ':namerecompense' => $nom,
        ':daterecompense' => $date,
        ':lieurecompense' => $lieu,
    ]);
}