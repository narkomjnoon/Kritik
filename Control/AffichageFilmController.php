
<?php

require('Model/RecupFilmModel.php');
require('Model/RecupInfoFilmModel.php');


$result = recupfilm();
$resultat = recupinfofilm();

require('View/ListFilms.php');

?>