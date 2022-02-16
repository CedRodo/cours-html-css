<?php require 'header.php'; ?>
<?php if (isset($_SESSION['user'])==false) { header('location: backend/identification.php'); die; } ?>
<div class="flexbox">
<h1>FLEXBOX</h1>
<p style="margin: 100px 30px 100px 0px; text-align:end;">Un bon moyen de comprendre le fonctionnement de flexbox est <a class="pdf" href="https://flexboxfroggy.com" target="_blank">Flexbox Froggy<img class="logopdf" src="./assets/favicon.ico" alt="pdf" ></a></p>
<p class="contenu">Contenu de code :</p>

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

<p class="resultat">Résultat :</p>

<div class="styleflexbox">

<!-- CSS -->
<style> /*  la classe "styleflexbox" est utilisée pour séparer les styles CSS interne et externe */

* {
/* On applique cette propriété pour éviter que les blocs sortent de leur conteneur */
box-sizing: border-box;
}

/* On réinitialise les marges externes et interne */
/* body {
    margin: 0;
    padding: 0;
} */

/* Pour ne pas déformer l'image lorsqu'on la redimensionne */
.styleflexbox img {
    width: 100%;
    height: auto;
}

/* On réinialise le margin et padding à 0 et on donne une width de 20% au bloc */
.styleflexbox figure {
    margin: 0;
    padding: 0;
    width: 20%;
}

/* On retire le style appliquer par défault par le navigateur sur les liens */
.styleflexbox a {
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
    display: flex; /* On déclare flexbox */
    align-items: center; /* On aligne au centre sur l'axe vertical */
    justify-content: space-between; /* On aligne les blocs par rapport au coin droite et gauche de l'écran */

}

.top_header figure img {
    max-height: 50px; /* On donne une hauteur maximum de 50px */
}

.menu {
    display: flex;
    width: 100%;
    justify-content: space-around; /* On espace les éléments de manière égals */
}

.styleflexbox section {
    width: 80%;
    margin: auto; /* On applique une marge automatique à l'élément */
    display: flex;
    flex-wrap: wrap; /* On fait retourner l'élément à la ligne si il n'y a plus de place */
    justify-content: space-between;
}

.header_section {
    width: 100%;
}

.header_section h1 {
    text-align: center;
}

.styleflexbox article {
    width: calc(70% - 25px); /* Calcul pour dire à l'élément tu fais 70% de large moins 25px */
}

.styleflexbox aside {
    width: calc(30% - 25px);
}
.styleflexbox h1 {
    border-style: none; 
}
.styleflexbox nav {
    background-color: inherit;
}
</style>

<header class="top_header">
        <!-- Logo et le menu de navigation -->
        <figure class="logo">
            <img src="./assets/logohtmlcss.png" alt="Logo du site">
        </figure>
        <nav class="menu_navigation">
            <ul class="menu">
                <li><a href="#">Accueil</a></li>
                <li><a href="#">Portfolio</a></li>
                <li><a href="#">CV</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </header>
    <section>
        <!-- Ici une section -->
        <header class="header_section"><h1>Titre de mon site</h1></header>
        <article>
            <header class="header_article">
                <h2>Titre de mon article</h2>
                <!-- Insertion Vidéo Youtube avec Iframe -->
                <iframe width="560" height="315" src="https://www.youtube.com/embed/IsJiUdUGfEc" title="YouTube video player"
                    frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </header>
            
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                At quam aut cupiditate, qui corrupti nulla eum velit 
                nemo id repudiandae libero recusandae non molestias 
                totam maiores cumque omnis, necessitatibus 
                doloribus.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                At quam aut cupiditate, qui corrupti nulla eum velit
                nemo id repudiandae libero recusandae non molestias
                totam maiores cumque omnis, necessitatibus
                doloribus.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                At quam aut cupiditate, qui corrupti nulla eum velit
                nemo id repudiandae libero recusandae non molestias
                totam maiores cumque omnis, necessitatibus
                doloribus.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                At quam aut cupiditate, qui corrupti nulla eum velit
                nemo id repudiandae libero recusandae non molestias
                totam maiores cumque omnis, necessitatibus
                doloribus.</p>
                <footer class="footer_article">
                    <p>Article rédigé par Maxime LEROY</p>
                    <ul class="menu_social">
                        <li>icone partage réseau sociaux</li>
                        <li>icone partage réseau sociaux</li>
                        <li>icone partage réseau sociaux</li>
                    </ul>
                </footer>
        </article>
        <aside>
            <!-- Donner des informations complémentaires-->
            <h2>A propos de moi<span><!-- Balise span de type inline --> Balise inline</span></h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                At quam aut cupiditate, qui corrupti nulla eum velit
                nemo id repudiandae libero recusandae non molestias
                totam maiores cumque omnis, necessitatibus
                doloribus.</p>
        </aside>
    </section>
    <footer>
        <!-- Pied de page, on y va retrouver des infos comme des liens
        l'auteur du site web, mentions légales, etc ... -->
        <p>Copyright Maxime LEROY - Tous droits réservés</p>
        <p><a href="#">Me contacter sur la page de contact</a></p>
    </footer>

</div>

</body>
</html>
<?php require 'footer.php'; ?>