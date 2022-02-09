<?php require('header.php'); ?>
<div class="debut">
<h1>DEBUT DANS HTML/CSS</h1>

<p class="contenu">Contenu de code :</p>

<pre>

&lt;!-- *** Contenu HTML *** --&gt;

&lt;!-- Balise en paire
&lt;balise&gt;Hello&lt;/balise&gt;

Balise orpheline
&lt;image /&gt;

Les attributs
&lt;balise attribut=&quot;valeur&quot;&gt;&lt;/balise&gt;--&gt;

&lt;!-- Commentaire en HTML et CSS
Sur plusieurs lignes
--&gt;

&lt;!DOCTYPE html&gt;
&lt;html lang=&quot;fr&quot;&gt;
&lt;head&gt;
   &lt;!-- Encodage des caract&egrave;res du site --&gt;
   &lt;meta charset=&quot;UTF-8&quot;&gt;
   &lt;meta http-equiv=&quot;X-UA-Compatible&quot; content=&quot;IE=edge&quot;&gt;
   &lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1.0&quot;&gt;
   &lt;title&gt;Mon site&lt;/title&gt;
   &lt;link rel=&quot;stylesheet&quot; href=&quot;assets/style.css&quot;&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;!-- Pour organiser son texte en paragraphe --&gt;
&lt;p class=&quot;red center&quot;&gt;Ceci est un paragraphe&lt;/p&gt;
&lt;p id=&quot;secondParagraph&quot;&gt;Ceci est la deuxi&egrave;me ligne
   &lt;!-- Pour sauter une ligne dans un paragraphe --&gt;
   &lt;br /&gt; du paragraphe
&lt;/p&gt;

&lt;!-- Les balises de titre --&gt;
&lt;h1&gt;Titre tr&egrave;s important, un seul par page et doit contenir le mot cl&eacute; principal de la page&lt;/h1&gt;
&lt;h2&gt;Titre important, plusieurs par page mais un seul par section. Doit reprendre le mots-cl&eacute;s qui traite de la section&lt;/h2&gt;
&lt;h3&gt;Signifie pareil que le h2 mais qui est moins important que lui, contenu dans les sections principalement pour un titre de sous section&lt;/h3&gt;
&lt;h4&gt;Titre encore moins important&lt;/h4&gt;
&lt;h5&gt;Titre pas important&lt;/h5&gt;
&lt;h6&gt;Titre vraiment pas important&lt;/h6&gt;

&lt;p&gt;Ceci est un &lt;em&gt;paragraphe&lt;/em&gt;, mais on peut mettre le texte
&lt;strong&gt;plus en valeur&lt;/strong&gt;
On va aussi avoir une balise pour &lt;mark&gt;surligner le texte&lt;/mark&gt;&lt;/p&gt;

&lt;!-- Liste non ordonn&eacute;es --&gt;
&lt;ul&gt; &lt;!-- D&eacute;limite toute la liste --&gt;
   &lt;li&gt;Voiture&lt;/li&gt; &lt;!-- D&eacute;limiter un &eacute;l&eacute;ment de la liste --&gt;
   &lt;li&gt;Bateau&lt;/li&gt;
   &lt;li&gt;Moto&lt;/li&gt;
&lt;/ul&gt;


&lt;!-- Liste ordonn&eacute;es --&gt;
&lt;ol type=&quot;I&quot;&gt;
   &lt;li&gt;Voiture&lt;/li&gt;
   &lt;li&gt;Bateau&lt;/li&gt;
   &lt;li&gt;Moto&lt;/li&gt;
&lt;/ol&gt;

&lt;a href=&quot;apropos.php&quot;&gt;Lien vers la page &agrave; propos&lt;/a&gt;

&lt;!-- *** Contenu de la feuille CSS : "style.css" *** --&gt;

p {
   font-size: 16px;
}

h1, .styledebut h2, .styledebut p {
color: blue;
}

.red {
   color: red;
}

.center {
   text-align: center;
}

#secondParagraph {
   color: green;
}

.titre_principal {
   color: red;
   text-align: center;
}


.text_right {
   text-align: right;
}

/*
Un commentaire en CSS
Sur plusieurs lignes
*/

/* Selecteur universel */
/* * {
   font-size: 16px;
} */

/* A B : Une balise contenue dans une autre */
ul li {
   font-size: 24px;
}

/* A + B : Une balise qui en suit une autre */
.styledebut h3 + h4 {
   color: red;
   font-size: 34px;
}



</pre>

<p class="resultat">Résultat :</p>

<div class="styledebut">

<!-- *** Contenu de la feuille CSS : "style.css" *** -->

<style> /*  la classe "styledebut" est utilisée pour séparer les styles CSS interne et externe */

.styledebut p {
    font-size: 16px;
}

.styledebut h1, .styledebut h2, .styledebut p {
color: blue;
}

.red {
    color: red;
}

.center {
    text-align: center;
}

#secondParagraph {
    color: green;
}

.titre_principal {
    color: red;
    text-align: center;
} 


/* .text_right {
    text-align: right;
} */

/* 
Un commentaire en CSS 
Sur plusieurs lignes
*/ 

/* Selecteur universel */
/* * {
    font-size: 16px;
} */

/* A B : Une balise contenue dans une autre */
ul li {
    font-size: 24px;
}

/* A + B : Une balise qui en suit une autre */
.styledebut h3 + h4 {
    color: red;
    font-size: 34px;
}
</style>
<!-- Balise en paire 
<balise>Hello</balise>

Balise orpheline
<image />

Les attributs 
<balise attribut="valeur"></balise>-->

<!-- Commentaire en HTML et CSS 
Sur plusieurs lignes 
-->

<!-- Pour organiser son texte en paragraphe -->
<p class="red center">Ceci est un paragraphe</p>
<p id="secondParagraph">Ceci est la deuxième ligne 
    <!-- Pour sauter une ligne dans un paragraphe -->
    <br /> du paragraphe
</p>

<!-- Les balises de titre -->
<h1>Titre très important, un seul par page et doit contenir le mot clé principal de la page</h1>
<h2>Titre important, plusieurs par page mais un seul par section. Doit reprendre le mots-clés qui traite de la section</h2>
<h3>Signifie pareil que le h2 mais qui est moins important que lui, contenu dans les sections principalement pour un titre de sous section</h3>
<h4>Titre encore moins important</h4>
<h5>Titre pas important</h5>
<h6>Titre vraiment pas important</h6>

<p>Ceci est un <em>paragraphe</em>, mais on peut mettre le texte 
<strong>plus en valeur</strong>
On va aussi avoir une balise pour <mark>surligner le texte</mark></p>

<!-- Liste non ordonnées -->
<ul> <!-- Délimite toute la liste -->
    <li>Voiture</li> <!-- Délimiter un élément de la liste -->
    <li>Bateau</li>
    <li>Moto</li>
</ul>


<!-- Liste ordonnées -->
<ol type="I">
    <li>Voiture</li>
    <li>Bateau</li>
    <li>Moto</li>
</ol>

<a href="apropos.php">Lien vers la page à propos</a>

</div>

</div>
<?php require('footer.php'); ?>