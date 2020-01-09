<?php

if(isset($_GET['page']) && !empty($_GET['page'])) {
    $page = $_GET['page'];
}

else {
    $page = 'Home';
}

$page = ucfirst($page);

include('Control/'.$page.'Controller.php');