<?php

require('Model/ConnexionBddModel.php');
require('Model/AjoutActeurModel.php');

if (isset($_POST['nameact'])){
    $nom = $_POST['nameact'];
    $prenom = $_POST['prenomact'];
    $date = $_POST['dateact'];
    $lieu = $_POST['lieuact'];
    ajoutacteurbdd($nom, $prenom, $date, $lieu);
};
