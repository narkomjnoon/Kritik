<?php

require('Model/ConnexionBddModel.php');
require('Model/AjoutGenreModel.php');


if (isset($_POST['namegenre'])){
    $nom = $_POST['namegenre'];
    ajoutgenrebdd($nom)

}

