<?php
require('Model/ConnexionBddModel.php');
function ajoutUtilisateurbdd($pseudo, $mot_de_passe, $mail){
    global $bdd;
    $requete = $bdd->prepare ("INSERT INTO `utilisateur`( Pseudo, Mot_de_passe, Mail) VALUES (:pseudoutilisateur, :motdepasseutilisateur, :mailutilisateur)");
    $requete->execute([
    ':pseudoutilisateur' => $pseudo,
    ':motdepasseutilisateur' => $mot_de_passe,
    ':mailutilisateur' => $mail,
    ]);
}