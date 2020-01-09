<?php
session_start();/* démarrer la session*/
$login ="Login";

 if (isset( $_SESSION['PROFILE']['Pseudo'] )) {
   $login = $_SESSION['PROFILE']['Pseudo'];
}

?>