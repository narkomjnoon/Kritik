<?php  
require('Model/ConnexionBddModel.php');
require('View/Inscription.php');
require('Model/EnregModel.php');
if (isset($_POST['pseudo'])){
    $pseudo = $_POST['pseudo'];
    $mot_de_passe = $_POST['mot_de_passe'];
    $mail = $_POST['mail'];
    ajoutUtilisateurbdd($pseudo, $mot_de_passe, $mail);
};