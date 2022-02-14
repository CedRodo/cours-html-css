<?php include('header.php');
    if (isset($_SESSION['user'])==false) {
        header('location: backend/identification.php');
        die;
    }
  
    ?>
<div class="accueil">
<h1>COURS ET EXERCICES DE HTML/CSS</h1>
<img src="http://localhost/monsite/courshtmlcss/assets/logohtmlcss.png">
<p>Nous allons pouvoir utiliser ce site pour répertorier et visualiser les différents cours et exercices effectués en HTML et CSS. Ceux-ci sont accessibles via le menu de navigation.

Pour en savoir plus, vous pouvez directement consulter la documentation sur le HTML <a href="https://developer.mozilla.org/fr/docs/Web/HTML" target="_blank">ici</a> ou <a href="https://www.w3schools.com/html/" target="_blank">ici</a> et la documentation sur le CSS <a href="https://developer.mozilla.org/fr/docs/Web/CSS" target="_blank">ici</a> ou <a href="https://www.w3schools.com/css/" target="_blank">ici</a>.

Vous pouvez également accéder à d'autres cours :

<a href ="http://localhost/monsite/coursphp/index.php" target="_blank">PHP</a>
</p> 
</div>
<?php include('footer.php'); ?>