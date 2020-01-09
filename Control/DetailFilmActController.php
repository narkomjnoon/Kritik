<?php

require('Model/RecupDetailFilmActModel.php');

if(isset($_GET['id'])){
    $id = $_GET['id'];
}

$result = recupfilm($id);
require('View/ListDetailFilmsAc.php');


?>