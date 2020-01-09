<?php

require('Model/RecupDetailFilmModel.php');

if(isset($_GET['id'])){
    $id = $_GET['id'];
}

$result = recupDetailfilm($id);
$result1 = recupDetailfilm1($id);
$result2 = recupDetailfilm2($id);
//$resultat = recupinfofilm();
require('View/ListDetailFilms.php');


?>