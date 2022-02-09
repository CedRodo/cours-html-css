<?php require('header.php'); ?>
<div class="apropos">
<h1>À PROPOS</h1>

<p class="contenu">Contenu de code :</p>

<pre>
    
&lt;!-- *** Contenu HTML *** --&gt;

&lt;a href=&quot;index.php&quot;&gt;Lien vers la page d'accueil&lt;/a&gt;
   &lt;!-- &lt;a href=&quot;../&quot;&gt;Lien vers la page d'accueil&lt;/a&gt;&gt; &lt;!-- &quot;../&quot; permet de sortir du dossier dans lequel on est pour revenir au pr&eacute;c&eacute;dent --&gt;
   &lt;br&gt;
   &lt;!-- Pour ins&eacute;rer une image &lt;img /&gt; balise orpheline--&gt;
   &lt;!-- &lt;img src=&quot;images/logoduclub.jpg&quot; alt=&quot;Logo du club&quot; /&gt; --!&gt;

   &lt;!-- Pour que l'image soit li&eacute;e &agrave; un lien hypertexte --&gt;
   &lt;a href=&quot;index.php&quot;&gt;&lt;p&gt;&lt;img src=&quot;./assets/logohtmlcss.png&quot; alt=&quot;Logo du club&quot; /&gt;&lt;/p&gt;&lt;/a&gt;
   &lt;figure&gt;
       &lt;img src=&quot;./assets/logohtmlcss.png&quot; alt=&quot;Logo du club&quot; /&gt;
       &lt;figcaption&gt;Logo du club&lt;/figcaption&gt; &lt;!-- &lt;figcaption&gt; permet d&quot;ajouter une l&eacute;gende &agrave; l'image --&gt;
   &lt;/figure&gt;

</pre>

<p class="resultat">Résultat :</p>

    <a href="index.php">Lien vers la page d'accueil</a>
    <!-- <a href="../">Lien vers la page d'accueil</a>> <!-- "../" permet de sortir du dossier dans lequel on est pour revenir au précédent -->
    <br>
    <!-- Pour insérer une image <img /> balise orpheline-->
    <!-- <img src="images/logoduclub.jpg" alt="Logo du club" /> --!>

    <!-- Pour que l'image soit liée à un lien hypertexte -->
    <a href="index.php"><p><img src="./assets/logohtmlcss.png" alt="Logo du club" /></p></a>
    <figure>
        <img src="./assets/logohtmlcss.png" alt="Logo du club" />
        <figcaption>Logo du club</figcaption> <!-- <figcaption> permet d"ajouter une légende à l'image -->
    </figure>

</div>
<?php require('footer.php'); ?>

