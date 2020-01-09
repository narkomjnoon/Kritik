<?php

require('Model/RecupGenreModel.php');

//$result = recupgenrefilm();

if(isset($_GET['id'])){
    $id = $_GET['id'];
}

$result = recupgenrefilm($id);

require('View/ListgenreFilms.php');

?>