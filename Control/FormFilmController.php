<?php  

require('Model/ConnexionBddModel.php');

require('Model/AjoutFilmModel.php');

if (isset($_POST['titrefilm'])){
    $titre = $_POST['titrefilm'];
    $date = $_POST['datefilm'];
    $lieu = $_POST['lieufilm'];
    ajoutfilmbdd($titre, $date, $lieu);
};

