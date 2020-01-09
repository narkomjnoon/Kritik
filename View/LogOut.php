 <?php

session_start();
/* Maintenant on va détruire la session*/
session_destroy();
/* redirection vers page Authentification*/
header('location:index.php');
 ?> 