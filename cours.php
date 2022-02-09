<?php include('header.php'); ?>
<div class="cours">
<h1>COURS DE PHP</h1>
<p style="margin: 100px 30px 100px 0px; text-align:end;">Le PDF du cours en HTML est disponible <a class="pdf" href="./assets/courshtml.pdf" target="_blank">ici <img class="logopdf" src="./assets/iconpdf.png" alt="pdf" ></a></p>
<p class="contenu">Contenu du cours en code :</p>


<div class="cours2">
<h2>1) Début dans HTML/CSS :</h2>

<a href="coursoriginal/index.html" target=_blank">index.html</a>

<pre>

&lt;!-- *** Contenu du HTML *** --&gt;

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



<h2>2) À Propos :</h2>

<a href="coursoriginal/contenu/a-propos.html" target=_blank">a-propos.html</a>

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

<h2>3) Les polices :</h2>

<a href="coursoriginal/polices.html" target=_blank">polices.html</a>

<pre>

&lt;!-- *** Contenu du HTML *** --&gt;

&lt;!DOCTYPE html&gt;
&lt;html lang=&quot;fr&quot;&gt;
&lt;head&gt;
   &lt;meta charset=&quot;UTF-8&quot;&gt;
   &lt;meta http-equiv=&quot;X-UA-Compatible&quot; content=&quot;IE=edge&quot;&gt;
   &lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1.0&quot;&gt;
   &lt;title&gt;Formatage du texte&lt;/title&gt;
   &lt;link rel=&quot;preconnect&quot; href=&quot;https://fonts.googleapis.com&quot;&gt;
   &lt;link rel=&quot;preconnect&quot; href=&quot;https://fonts.gstatic.com&quot; crossorigin&gt;
   &lt;link
       href=&quot;https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;family=Vujahday+Script
       &amp;display=swap&quot;
       rel=&quot;stylesheet&quot;&gt;
   &lt;link rel=&quot;stylesheet&quot; href=&quot;assets/polices.css&quot;&gt;
&lt;/head&gt;
&lt;body&gt;
   &lt;h1&gt;Formatage du texte&lt;/h1&gt;
   &lt;a class=&quot;lien&quot; href=&quot;&quot;&gt;Un lien&lt;/a&gt;
   &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent commodo nisl non ante venenatis luctus tincidunt sit
   amet erat. Nunc et sapien eget lacus vestibulum sodales ut vestibulum mi. Nulla dapibus ante ac lectus scelerisque
   auctor. Duis eu orci sagittis, euismod tellus eu, efficitur odio. Pellentesque habitant morbi tristique senectus et
   netus et malesuada fames ac turpis egestas. Pellentesque habitant morbi tristique senectus et netus et malesuada fames
   ac turpis egestas. Etiam tincidunt dolor sem, eu vestibulum felis congue quis. Nulla aliquet pellentesque purus eget
   auctor. Etiam fermentum finibus nibh nec pulvinar. Vestibulum aliquet ex turpis, quis varius ex commodo a. Mauris rutrum
   posuere nulla quis ornare. Morbi condimentum et nibh eget pulvinar. Sed tempor odio sapien, elementum pharetra ex
   lobortis id. Nunc nec massa purus. Quisque metus est, rhoncus quis mauris ut, vulputate sollicitudin enim.&lt;/p&gt;

&lt;/body&gt;
&lt;/html&gt;

&lt;!-- *** Contenu de la feuille CSS "polices.css" *** --&gt;

body {
   font-style: italic;
   background-color:rgb(202, 163, 163);
   background-image: url(../images/logoduclub.jpg);
   background-repeat: no-repeat; /* repeat-x, repeat-y, no-repeat */
   background-position: top;
   background-size: 50%;
}

h1 {
   font-size: 2em;
   font-family: 'Montserrat', sans-serif;
   font-style: italic;
   font-weight: 2000;
   text-decoration: underline;
   text-align: center;
   color: rgb(49, 114, 49, 0.4);
}

.lien {
   text-decoration: none;
   font-size: 3rem;
   color: royalblue;
}

.lien:hover {
   color: seagreen;
   font-size: 5rem;
}

.lien:visited {
   color: white;
}

p {
   text-align: justify;
   border: 5px black double;
   border-radius: 15px 7px 30px 0px;
   background-color: coral;
   box-shadow: 10px 10px 20px black;
   color:blue;
}

</pre>

<h2>4) Les formulaires :</h2>

<a href="coursoriginal/formulaire.html" target=_blank">formulaire.html</a>

<pre>

&lt;!-- *** Contenu du HTML *** --&gt;

&lt;!DOCTYPE html&gt;
&lt;html lang=&quot;en&quot;&gt;
&lt;head&gt;
   &lt;meta charset=&quot;UTF-8&quot;&gt;
   &lt;meta http-equiv=&quot;X-UA-Compatible&quot; content=&quot;IE=edge&quot;&gt;
   &lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1.0&quot;&gt;
   &lt;title&gt;Document&lt;/title&gt;
   &lt;link rel=&quot;stylesheet&quot; href=&quot;assets/formulaire.css&quot;&gt;
&lt;/head&gt;
&lt;body&gt;
   &lt;h1&gt;Formulaire&lt;/h1&gt;
   &lt;form method=&quot;post&quot; action=&quot;traitement_formulaire.php&quot;&gt;
       &lt;!-- Mettre obligatoirement des balises de type bloc &agrave; l'int&eacute;rieur --&gt;
       &lt;fieldset&gt;
           &lt;legend&gt;Vos coordonn&eacute;es&lt;/legend&gt;
       &lt;p&gt;
           &lt;label for=&quot;prenom&quot;&gt;Votre pr&eacute;nom : &lt;/label&gt;
           &lt;input type=&quot;text&quot; name=&quot;prenom&quot; id=&quot;prenom&quot; size=&quot;30&quot; placeholder=&quot;Merci d'entrer votre pr&eacute;nom&quot; value=&quot;Cedric&quot; required  /&gt; &lt;!-- required rend le champs obligatoire --&gt;
       &lt;/p&gt;

       &lt;p&gt;
           &lt;label for=&quot;password&quot;&gt;Votre password :&lt;/label&gt;
           &lt;input type=&quot;password&quot; name=&quot;password&quot; id=&quot;password&quot; placeholder=&quot;Merci d'entrer votre password&quot; /&gt;
       &lt;/p&gt;

       &lt;p&gt;
           &lt;label for=&quot;email&quot;&gt;Votre email :&lt;/label&gt;
           &lt;input type=&quot;email&quot; name=&quot;email&quot; id=&quot;email&quot; placeholder=&quot;Merci d'entrer votre email&quot; /&gt;
       &lt;/p&gt;
       
       &lt;p&gt;
           &lt;label for=&quot;tel&quot;&gt;Votre t&eacute;l&eacute;phone :&lt;/label&gt;
           &lt;input type=&quot;tel&quot; name=&quot;tel&quot; id=&quot;tel&quot; placeholder=&quot;Merci d'entrer votre t&eacute;l&eacute;phone&quot; /&gt;
       &lt;/p&gt;
       &lt;/fieldset&gt;
       &lt;p&gt;
           &lt;label for=&quot;url&quot;&gt;Votre adresse internet :&lt;/label&gt;
           &lt;input type=&quot;url&quot; name=&quot;url&quot; id=&quot;url&quot; placeholder=&quot;Merci d'entrer votre adresse internet&quot; /&gt;
       &lt;/p&gt;

       &lt;p&gt;
           &lt;label for=&quot;age&quot;&gt;Votre &acirc;ge :&lt;/label&gt;
           &lt;input type=&quot;number&quot; name=&quot;age&quot; id=&quot;age&quot; placeholder=&quot;Merci d'entrer votre &acirc;ge&quot; min=&quot;18&quot; max=&quot;60&quot; step=&quot;2&quot; /&gt;
       &lt;/p&gt;

       &lt;p&gt;
           &lt;label for=&quot;range&quot;&gt;Range :&lt;/label&gt;
           &lt;input type=&quot;range&quot; name=&quot;range&quot; id=&quot;range&quot; placeholder=&quot;Merci d'entrer votre range&quot; min=&quot;0&quot; max=&quot;100&quot; step=&quot;2&quot; /&gt;
       &lt;/p&gt;

       &lt;p&gt;
           &lt;label for=&quot;date&quot;&gt;Date :&lt;/label&gt;
           &lt;input type=&quot;date&quot; name=&quot;date&quot; id=&quot;date&quot; placeholder=&quot;Merci d'entrer votre date de naissance&quot; /&gt;
       &lt;/p&gt;

       &lt;p&gt;
           &lt;label for=&quot;couleur&quot;&gt;Couleur :&lt;/label&gt;
           &lt;input type=&quot;color&quot; name=&quot;couleur&quot; id=&quot;couleur&quot; /&gt;
       &lt;/p&gt;

       &lt;p&gt;
           &lt;label for=&quot;recherche&quot;&gt;Recherche :&lt;/label&gt;
           &lt;input type=&quot;search&quot; name=&quot;recherche&quot; id=&quot;recherche&quot; /&gt;
       &lt;/p&gt;

       &lt;p&gt;
           &lt;label for=&quot;message&quot;&gt;Votre message : &lt;/label&gt;
           &lt;textarea name=&quot;message&quot; id=&quot;message&quot; cols=&quot;30&quot; rows=&quot;10&quot;&gt;&lt;/textarea&gt;
       &lt;/p&gt;

       &lt;!-- Les cases &agrave; cocher : un choix multiple d'option --&gt;
       &lt;div&gt;
           &lt;p&gt;S&eacute;lectionner les options d&eacute;sir&eacute;es :&lt;/p&gt;
           &lt;p&gt;
               &lt;ul&gt;
                   &lt;li&gt;&lt;input type=&quot;checkbox&quot; name=&quot;option1&quot; id=&quot;option1&quot; checked /&gt; &lt;label for=&quot;option1&quot;&gt;Option 1&lt;/label&gt;&lt;/lil&gt;
                   &lt;li&gt;&lt;input type=&quot;checkbox&quot; name=&quot;option2&quot; id=&quot;option2&quot; /&gt; &lt;label for=&quot;option2&quot;&gt;Option 2&lt;/label&gt;&lt;/lil&gt;
                   &lt;li&gt;&lt;input type=&quot;checkbox&quot; name=&quot;option3&quot; id=&quot;option3&quot; /&gt; &lt;label for=&quot;option1&quot;&gt;Option 3&lt;/label&gt;&lt;/lil&gt;
               &lt;/ul&gt;
           &lt;/p&gt;
       &lt;/div&gt;

       &lt;!-- Les radios : un seul choix &agrave; cocher --&gt;
       &lt;div&gt;
           &lt;p&gt;S&eacute;lectionner les options d&eacute;sir&eacute;es :&lt;/p&gt;
           &lt;p&gt;
               &lt;ul&gt;
                   &lt;li&gt;&lt;input type=&quot;radio&quot; name=&quot;radio&quot; id=&quot;radio&quot; /&gt; &lt;label for=&quot;radio&quot;&gt;Radio 1&lt;/label&gt;&lt;/lil&gt;
                   &lt;li&gt;&lt;input type=&quot;radio&quot; name=&quot;radio&quot; id=&quot;radio&quot; checked/&gt; &lt;label for=&quot;radio&quot;&gt;Radio 2&lt;/label&gt;&lt;/lil&gt;
                   &lt;li&gt;&lt;input type=&quot;radio&quot; name=&quot;radio&quot; id=&quot;radio&quot; /&gt; &lt;label for=&quot;radio&quot;&gt;Radio 3&lt;/label&gt;&lt;/lil&gt;
               &lt;/ul&gt;
           &lt;/p&gt;
       &lt;/div&gt;

       &lt;!-- Les options : liste d&eacute;roulante avec un seul choix &agrave; s&eacute;lectionner --&gt;
       &lt;div&gt;
           &lt;p&gt;S&eacute;lectionner votre pays :&lt;/p&gt;
           &lt;select name=&quot;pays&quot; id=&quot;pays&quot;&gt;
               &lt;optgroup label=&quot;Europe&quot;&gt; &lt;!-- Permet de regrouper les options par cat&eacute;gorie --&gt;
                   &lt;option value=&quot;France&quot;&gt;France&lt;/option&gt;
                   &lt;option value=&quot;Italie&quot;&gt;Italie&lt;/option&gt;
                   &lt;option value=&quot;Espagne&quot;&gt;Espagne&lt;/option&gt;
               &lt;/optgroup&gt;
               &lt;optgroup label=&quot;Am&eacute;rique du Nord&quot;&gt;
                   &lt;option value=&quot;Canada&quot;&gt;Canada&lt;/option&gt;
                   &lt;option value=&quot;USA&quot;&gt;&Eacute;tats-Unis&lt;/option&gt;
               &lt;/optgroup&gt;
           &lt;/select&gt;
       &lt;/div&gt;
       &lt;input type=&quot;button&quot; value=&quot;Envoyer&quot; /&gt;
       &lt;button type=&quot;submit&quot;&gt;Envoyer&lt;/button&gt;
       &lt;button type=&quot;reset&quot;&gt;R&eacute;initialiser&lt;/button&gt;
       &lt;input type=&quot;file&quot; name=&quot;fichier&quot; id=&quot;fichier&quot; /&gt;

   &lt;/form&gt;

&lt;!-- *** Contenu de la feuille CSS "formulaire.css" *** --&gt;

:required {
       background-color: red;
    }
   
.styleformulaires:focus {
       border-color: red;
    }

</pre>

<h2>5) La manipulation avec flexbox :</h2>

<a href="coursoriginal/index.html" target=_blank">flexbox.html</a>

<pre>
    
&lt;!-- *** Contenu du HTML *** --&gt;

&lt;header class=&quot;top_header&quot;&gt;
       &lt;!-- Logo et le menu de navigation --&gt;
       &lt;figure class=&quot;logo&quot;&gt;
           &lt;img src=&quot;./assets/logohtmlcss.png&quot; alt=&quot;Logo du site&quot;&gt;
       &lt;/figure&gt;
       &lt;nav class=&quot;menu_navigation&quot;&gt;
           &lt;ul class=&quot;menu&quot;&gt;
               &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Accueil&lt;/a&gt;&lt;/li&gt;
               &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Portfolio&lt;/a&gt;&lt;/li&gt;
               &lt;li&gt;&lt;a href=&quot;#&quot;&gt;CV&lt;/a&gt;&lt;/li&gt;
               &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Contact&lt;/a&gt;&lt;/li&gt;
           &lt;/ul&gt;
       &lt;/nav&gt;
   &lt;/header&gt;
   &lt;section&gt;
       &lt;!-- Ici une section --&gt;
       &lt;header class=&quot;header_section&quot;&gt;&lt;h1&gt;Titre de mon site&lt;/h1&gt;&lt;/header&gt;
       &lt;article&gt;
           &lt;header class=&quot;header_article&quot;&gt;
               &lt;h2&gt;Titre de mon article&lt;/h2&gt;
               &lt;!-- Insertion Vid&eacute;o Youtube avec Iframe --&gt;
               &lt;iframe width=&quot;560&quot; height=&quot;315&quot; src=&quot;https://www.youtube.com/embed/IsJiUdUGfEc&quot; title=&quot;YouTube video player&quot;
                   frameborder=&quot;0&quot; allow=&quot;accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture&quot;
                   allowfullscreen&gt;&lt;/iframe&gt;
           &lt;/header&gt;
           
           &lt;p&gt;Lorem ipsum dolor sit amet consectetur adipisicing elit.
               At quam aut cupiditate, qui corrupti nulla eum velit
               nemo id repudiandae libero recusandae non molestias
               totam maiores cumque omnis, necessitatibus
               doloribus.&lt;/p&gt;
           &lt;p&gt;Lorem ipsum dolor sit amet consectetur adipisicing elit.
               At quam aut cupiditate, qui corrupti nulla eum velit
               nemo id repudiandae libero recusandae non molestias
               totam maiores cumque omnis, necessitatibus
               doloribus.&lt;/p&gt;
           &lt;p&gt;Lorem ipsum dolor sit amet consectetur adipisicing elit.
               At quam aut cupiditate, qui corrupti nulla eum velit
               nemo id repudiandae libero recusandae non molestias
               totam maiores cumque omnis, necessitatibus
               doloribus.&lt;/p&gt;
           &lt;p&gt;Lorem ipsum dolor sit amet consectetur adipisicing elit.
               At quam aut cupiditate, qui corrupti nulla eum velit
               nemo id repudiandae libero recusandae non molestias
               totam maiores cumque omnis, necessitatibus
               doloribus.&lt;/p&gt;
               &lt;footer class=&quot;footer_article&quot;&gt;
                   &lt;p&gt;Article r&eacute;dig&eacute; par Maxime LEROY&lt;/p&gt;
                   &lt;ul class=&quot;menu_social&quot;&gt;
                       &lt;li&gt;icone partage r&eacute;seau sociaux&lt;/li&gt;
                       &lt;li&gt;icone partage r&eacute;seau sociaux&lt;/li&gt;
                       &lt;li&gt;icone partage r&eacute;seau sociaux&lt;/li&gt;
                   &lt;/ul&gt;
               &lt;/footer&gt;
       &lt;/article&gt;
       &lt;aside&gt;
           &lt;!-- Donner des informations compl&eacute;mentaires--&gt;
           &lt;h2&gt;A propos de moi&lt;span&gt;&lt;!-- Balise span de type inline --&gt; Balise inline&lt;/span&gt;&lt;/h2&gt;
           &lt;p&gt;Lorem ipsum dolor sit amet consectetur adipisicing elit.
               At quam aut cupiditate, qui corrupti nulla eum velit
               nemo id repudiandae libero recusandae non molestias
               totam maiores cumque omnis, necessitatibus
               doloribus.&lt;/p&gt;
       &lt;/aside&gt;
   &lt;/section&gt;
   &lt;footer&gt;
       &lt;!-- Pied de page, on y va retrouver des infos comme des liens
       l'auteur du site web, mentions l&eacute;gales, etc ... --&gt;
       &lt;p&gt;Copyright Maxime LEROY - Tous droits r&eacute;serv&eacute;s&lt;/p&gt;
       &lt;p&gt;&lt;a href=&quot;#&quot;&gt;Me contacter sur la page de contact&lt;/a&gt;&lt;/p&gt;
   &lt;/footer&gt;

&lt;!-- *** Contenu de la feuille CSS "flexbox.css" *** --&gt;

* {
/* On applique cette propri&eacute;t&eacute; pour &eacute;viter que les blocs sortent de leur conteneur */
box-sizing: border-box;
}

/* On r&eacute;initialise les marges externes et interne */
body {
   margin: 0;
   padding: 0;
}

/* Pour ne pas d&eacute;former l'image lorsqu'on la redimensionne */
img {
   width: 100%;
   height: auto;
}

/* On r&eacute;inialise le margin et padding &agrave; 0 et on donne une width de 20% au bloc */
figure {
   margin: 0;
   padding: 0;
   width: 20%;
}

/* On retire le style appliquer par d&eacute;fault par le navigateur sur les liens */
a {
   text-decoration: none;
}

.menu_navigation {
   width: 70%;
}

ul {
   /* On supprime les puces des listes */
   list-style-type: none;
}

.top_header {
   width: 100%;
   padding: 5px 10%;
   height: 60px;
   display: flex; /* On d&eacute;clare flexbox */
   align-items: center; /* On aligne au centre sur l'axe vertical */
   justify-content: space-between; /* On aligne les blocs par rapport au coin droite et gauche de l'&eacute;cran */

}

.top_header figure img {
   max-height: 50px; /* On donne une hauteur maximum de 50px */
}

.menu {
   display: flex;
   width: 100%;
   justify-content: space-around; /* On espace les &eacute;l&eacute;ments de mani&egrave;re &eacute;gals */
}

section {
   width: 80%;
   margin: auto; /* On applique une marge automatique &agrave; l'&eacute;l&eacute;ment */
   display: flex;
   flex-wrap: wrap; /* On fait retourner l'&eacute;l&eacute;ment &agrave; la ligne si il n'y a plus de place */
   justify-content: space-between;
}

.header_section {
   width: 100%;
}

.header_section h1 {
   text-align: center;
}

article {
   width: calc(70% - 25px); /* Calcul pour dire &agrave; l'&eacute;l&eacute;ment tu fais 70% de large moins 25px */
}

aside {
   width: calc(30% - 25px);
}

</pre>

</div>

</div>
<?php include('footer.php'); ?>