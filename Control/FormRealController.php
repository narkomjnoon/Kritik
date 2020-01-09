<?php

require('Model/ConnexionBddModel.php');
require('Model/AjoutRealModel.php');

if (isset($_POST['name'])){
    $nom = $_POST['name'];
    $prenom = $_POST['prenom'];
    $date = $_POST['date'];
    $lieu = $_POST['lieu'];
    ajoutrealbdd($nom, $prenom, $date, $lieu);
}
