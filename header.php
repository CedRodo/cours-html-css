<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="16x16" href="http://localhost/monsite/courshtmlcss/assets/faviconhtml.png">
    <link rel="stylesheet" href="http://localhost/monsite/courshtmlcss/assets/style.css" />

    <title>Cours HTML et CSS</title>
</head>
<body>
    <div style="text-align: end;">
    <br />
    <p class="headerLog" style="font-size: 18px;"> <img src="http://localhost/monsite/courshtmlcss/assets/login.png" alt="se connecter"> <a href="http://localhost/monsite/courshtmlcss/backend/connexion.php">Connexion</a>  <img src="http://localhost/monsite/courshtmlcss/assets/inscription.png" alt="s'inscrire"> <a href="http://localhost/monsite/courshtmlcss/backend/inscription.php">Inscription</a> </p> 
    
    <?php
     if (isset($_SESSION['user'])==true) {
         echo "<br/><br/><p class='headerLog' style='font-size: 18px;' > <img src='http://localhost/monsite/courshtmlcss/assets/user.png' alt='nom de l'utilisateur'> Bonjour ".$_SESSION['user'];
         ?>
          <img src="http://localhost/monsite/courshtmlcss/assets/logout.png" alt="se déconnecter"> <a href="http://localhost/monsite/courshtmlcss/backend/deconnexion.php">Déconnexion</a>  <img src="http://localhost/monsite/courshtmlcss/assets/userslist.png" alt="liste complète des utilisateurs"> <a href="http://localhost/monsite/courshtmlcss/backend/liste_utilisateur.php">Liste des utilisateurs</a></p>
         <br/><br/>
         <?php
     }
     else { ?>
        <br/><br/><p class="headerLog" style="font-size: 18px;"> Vous n'êtes pas connecté<br/>
    <?php } ?>
     </div>
<header>
    <nav>  
    <a href="http://localhost/monsite/courshtmlcss/index.php">ACCUEIL </a> | <a href="http://localhost/monsite/courshtmlcss/cours.php"> COURS </a> | <a href="http://localhost/monsite/courshtmlcss/debut.php"> DÉBUT DANS HTML/CSS </a> | <a href="http://localhost/monsite/courshtmlcss/apropos.php"> À PROPOS </a> | <a href="http://localhost/monsite/courshtmlcss/polices.php"> POLICES </a> | <a href="http://localhost/monsite/courshtmlcss/formulaires.php"> FORMULAIRES </a> | <a href="http://localhost/monsite/courshtmlcss/flexbox.php"> FLEXBOX </a> | <a href="cv.php">CV</a> | <a href="http://localhost/monsite/courshtmlcss/portfolio.php">PORTFOLIO</a>
    <br/>
    <hr>
    </nav>
</header>