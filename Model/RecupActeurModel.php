<?php

require('Model/ConnexionBddModel.php');

function recupfilm(){
    global $bdd;
    $query = $bdd->prepare ("SELECT * FROM  acteurs ;");
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}