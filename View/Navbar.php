<?php 
  session_start();
  $log = "Login"; 
  if(isset ($_SESSION['PROFILE'])){
    $log = $_SESSION['PROFILE']['Pseudo'];
  }
?>

<nav id="barre_nav">
    <div id="logo">
        <a href="index.php?page=Home"><img src="View/image/logo.png"  alt="Logo Image"></a>
    </div>
    <div class="hamburger">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
    </div>
    <ul class="lien_nav">
        <?php 
        if(!isset($_SESSION['PROFILE'])){  ?>
            <li><a href="index.php?page=Login"> Login</a></li>
            <li><a href="index.php?page=FormEnreg">Inscription</a></li>
        <?php } else {   ?>
            <li><a href="index.php?page=Deconnecter">Deconnexion[<?php echo ((isset($_SESSION['PROFILE'])) ? $log : "") ?>] </a></li> 
            <li><a href="index.php?page=Formulaire&id=1">Ajout Films</a></li>
        <?php } ?>
        <li><a href="index.php?page=AffichageFilm">Films</a></li>
        <li><a href="index.php?page=AffichageReal">Realisateurs</a></li>
        <li><a href="index.php?page=AffichageActeur">Acteurs</a></li>

        <li class="dropdown">
            <a href="javascript:void(0)" class="dropbtn">Genre</a>
            <div class="dropdown-content">
                <a href="index.php?page=genre&id=1">Romance</a>
                <a href="index.php?page=genre&id=2">Drame</a>
                <a href="index.php?page=genre&id=3">Comédie</a>
                <a href="index.php?page=genre&id=4">Fantastique</a>
                <a href="index.php?page=genre&id=5">Policier</a>
                <a href="index.php?page=genre&id=7">Animation</a>
                <a href="index.php?page=genre&id=9">Biopic</a>
                <a href="index.php?page=genre&id=10">Guerre</a>
                <a href="index.php?page=genre&id=11">Historique</a>
                <a href="index.php?page=genre&id=12">Judiciaire</a>
                <a href="index.php?page=genre&id=13">Thriller</a>
            </div>
        </li>
    </ul>
</nav>