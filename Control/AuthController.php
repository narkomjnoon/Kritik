<?php
require('Model/AuthModel.php');



if (isset($re)){
    if ($re == "home"){
        
        header('location:index.php?page=home'); 
        
    }else{
        header('location:index.php?page=login'); 
      
    }
     
}


//require('View/Auth.php');

//header('location:index.php?page=Login'); 




