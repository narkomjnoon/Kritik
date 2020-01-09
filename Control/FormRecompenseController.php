<?php

require('Model/ConnexionBddModel.php');
require('Model/AjoutRecompenseModel.php');

if (isset($_POST['namerecompense'])){
    $nom = $_POST['namerecompense'];
    $date = $_POST['daterecompense'];
    $lieu = $_POST['lieurecompense'];
    ajoutrecompensebdd($nom, $date, $lieu)
}

