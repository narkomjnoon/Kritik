<?php
require('Model/ConnexionBddModel.php');

$login =$_POST['username'];
$pass  =($_POST['password']);

$re ="";

$ps=$bdd->prepare("SELECT * FROM utilisateur WHERE Pseudo=? AND Mot_de_passe=?");
$params=array($login,$pass);
$ps->execute($params);
if($user=$ps->fetch()){
      session_start();
      $_SESSION['PROFILE']=$user;
   $re = "home";
    }
    else{
    
      $re ="login";
    }

   


?>