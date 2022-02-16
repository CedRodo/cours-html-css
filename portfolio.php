<?php require 'header.php'; ?>
<?php if (isset($_SESSION['user'])==false) { header('location: backend/identification.php'); die; } ?>
<div class="portfolio">
<h1>PORTFOLIO</h1>
<p style="margin: 100px 30px 50px 0px; text-align:end;">Le TP sur le <a class="pdf" href="assets/tp_integration_html5_css3.pdf" target="_blank">portfolio<img class="logopdf" src="./assets/iconpdf.png" alt="pdf" ></a></p>
<p style="margin: 50px 30px 100px 0px; text-align:end;">Mon <a class="pdf" href="./portfolio/index.html" target="_blank">portfolio</a></p>

<p class="contenu">Contenu de code :</p>

<pre>

&lt;!-- *** Contenu du HTML *** --&gt;

&lt;!DOCTYPE html&gt;
&lt;html lang=&quot;en&quot;&gt;
&lt;head&gt;
   
   &lt;meta charset=&quot;UTF-8&quot;&gt;
   &lt;meta http-equiv=&quot;X-UA-Compatible&quot; content=&quot;IE=edge&quot;&gt;
   &lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1.0&quot;&gt;
   &lt;title&gt;Mon Portfolio&lt;/title&gt;
   &lt;link rel=&quot;stylesheet&quot; href=&quot;assets/styles.css&quot;&gt;

&lt;/head&gt;

&lt;body&gt;
   
   &lt;div class=&quot;bckgrd&quot;&gt;

   &lt;header class=&quot;top_header&quot; id=&quot;home&quot;&gt;

       &lt;figure class=&quot;logo&quot;&gt;
           
           &lt;img src=&quot;images/logo-loup.jpg&quot; alt=&quot;logo du site&quot;&gt;

       &lt;/figure&gt;

       &lt;nav class=&quot;menu_nav&quot;&gt;
           
           &lt;ul class=&quot;menu&quot;&gt;
             
               &lt;li&gt;&lt;a href=&quot;#home&quot;&gt;Accueil&lt;/a&gt;&lt;/li&gt;
               &lt;li&gt;&lt;a href=&quot;#apropos&quot;&gt;&Agrave; propos&lt;/a&gt;&lt;/li&gt;
               &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Comp&eacute;tences&lt;/a&gt;&lt;/li&gt;
               &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Portfolio&lt;/a&gt;&lt;/li&gt;
               &lt;li&gt;&lt;a href=&quot;#contact&quot;&gt;Contact&lt;/a&gt;&lt;/li&gt;
           
           &lt;/ul&gt;
       
       &lt;/nav&gt;

   &lt;/header&gt;
   
       &lt;section id=&quot;accueil&quot;&gt;
           
           &lt;h1 class=&quot;test&quot;&gt;&lt;a href=&quot;#apropos&quot;&gt;C&eacute;dric Rodony&lt;/a&gt;&lt;/h1&gt;
           &lt;h2&gt;&lt;a href=&quot;dossier_cv/cv.html&quot;&gt;D&eacute;veloppeur Web&lt;/a&gt;&lt;/h2&gt;
       
       &lt;/section&gt;

   &lt;/div&gt;
       
       &lt;section id=&quot;apropos&quot; class=&quot;bckgrd2&quot;&gt;
           
           &lt;h2&gt;&Agrave; propos&lt;/h2&gt;
           
           &lt;figure class=&quot;avatar&quot;&gt;

               &lt;img src=&quot;images/photo_avatar.png&quot; alt=&quot;photo avatar&quot;&gt;

           &lt;/figure&gt;

           &lt;div class=&quot;infos&quot;&gt;

               &lt;p&gt;Je suis C&eacute;dric Rodony, apprenti en D&eacute;veloppement Web. Bien que plus particuli&egrave;rement sp&eacute;cialis&eacute; dans la maintenance informatique, la conception de sites internet a toujours &eacute;veill&eacute; ma curiosit&eacute;. Tel un spectateur d&eacute;sirant devenir &agrave; son tour magicien, je souhaite acqu&eacute;rir les comp&eacute;tences pour &ecirc;tre D&eacute;veloppeur Web.&lt;/p&gt;&lt;br&gt;
               &lt;br&gt;

               &lt;ul&gt;

                   &lt;li&gt;Date de Naissance : 29/12/1982&lt;/li&gt;&lt;br&gt;
                   &lt;li&gt;Adresse : 11, rue du Berry 94550 Chevilly-Larue&lt;/li&gt;&lt;br&gt;
                   &lt;li&gt;Mail : cedric.rodony@gmail.com&lt;/li&gt;&lt;br&gt;
                   &lt;li&gt;T&eacute;l&eacute;phone : 06 52 39 26 40&lt;/li&gt;&lt;br&gt;

               &lt;/ul&gt;

               &lt;button&gt;&lt;a href=&quot;dossier_cv/cv.html&quot;&gt;Mon CV&lt;/a&gt;&lt;/button&gt;

           &lt;/div&gt;

       &lt;/section&gt;

       &lt;section id=&quot;contact&quot; class=&quot;bckgrd3&quot;&gt;

       &lt;h2&gt;Contact&lt;/h2&gt;

       &lt;div class=&quot;contact-flex&quot;&gt;

           &lt;div class=&quot;map&quot;&gt;

                   &lt;iframe scrolling=&quot;no&quot; marginheight=&quot;0&quot; marginwidth=&quot;0&quot; src=&quot;https://maps.google.com/maps?width=100%25&amp;amp;height=600&amp;amp;hl=fr&amp;amp;q=stalindgrad%20villejuif+(Le%20Nom%20de%20mon%20Entreprise)&amp;amp;t=&amp;amp;z=14&amp;amp;ie=UTF8&amp;amp;iwloc=B&amp;amp;output=embed&quot; width=&quot;100%&quot; height=&quot;600&quot; frameborder=&quot;0&quot;&gt;&lt;a href=&quot;https://www.gps.ie/golf-gps/&quot;&gt;golf gps&lt;/a&gt;&lt;/iframe&gt;

           &lt;/div&gt;
           
       &lt;div class=&quot;coordonnees&quot;&gt;

           &lt;p&gt;Vous pouvez remplir ce formulaire avec vos coordonn&eacute;es pour me contacter ou me joindre directement par t&eacute;l&eacute;phone ou mail dans &lt;a href=&quot;#apropos&quot;&gt;&Agrave; Propos&lt;/a&gt;&lt;/p&gt;&lt;br&gt;

           &lt;form method=&quot;post&quot; action=&quot;traitement_formulaire.php&quot;&gt;

               &lt;p&gt;
                   &lt;input type=&quot;text&quot; name=&quot;nom&quot; id=&quot;nom&quot; size=&quot;30&quot; placeholder=&quot;Pr&eacute;nom Nom&quot; required /&gt;
               &lt;/p&gt;
                   
               &lt;p&gt;
                   &lt;input type=&quot;email&quot; name=&quot;email&quot; id=&quot;email&quot; placeholder=&quot;E-mail&quot; required /&gt;
               &lt;/p&gt;
                   
               &lt;p&gt;
                   &lt;textarea name=&quot;message&quot; id=&quot;message&quot; cols=&quot;40&quot; rows=&quot;10&quot;&gt;&lt;/textarea&gt;
               &lt;/p&gt;

           &lt;/form&gt;

           &lt;br&gt;

           &lt;button type=&quot;submit&quot;&gt;Envoyer&lt;/button&gt;
           
       &lt;/div&gt;
               
       &lt;/div&gt;

   &lt;/section&gt;

   &lt;footer&gt;

   &lt;/footer&gt;

&lt;!-- *** Contenu de la feuille CSS : "style.css" *** --&gt;

* {
box-sizing: border-box;
}

body {
   margin: 0;
   padding: 0;
   font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
}

.bckgrd {
   background-image: url(../images/bckgrd.png);
   background-repeat:no-repeat;
   background-size: cover;
}

.top_header {
   width: 100%;
   height: 14vw;
   display: flex;
   justify-content: space-between;
   background-color: black;
   opacity: 0.9;
}

.menu_nav {
   margin-top: 6%;
   width: 55%;
}

.menu {
   display: flex;
   width: 100%;
   justify-content: space-between;
   padding-top: 30px;
   padding-right: 40px;
   font-size: 30px;
}

.menu a:hover {
   color: rgba(240, 240, 109, 0.842);
}

.menu li:hover {
   transform: scale(1.1);
   transition: ease 0.2;
}

figure {
   margin: 0;
   padding: 0;
   width: 20%;
}

#home img {
   width: 100%;
   height: 100%;
}

ul {
   list-style-type: none;
   padding: 0;
}


#accueil {
   height: 700px;
   max-height: 700px;
   display: flex;
   flex-direction: column;
   align-items: center;
   justify-content: center;
   color:rgb(241, 238, 238);
}

#accueil h1 {
   font-size: 60px;
}

#accueil h2 {
   font-size: 50px;
}

#accueil a {
   text-decoration: none;
   color:rgb(241, 238, 238);
}

#accueil h1:hover {
   transform: scale(1.4);
   transition: ease 0.1;
}

#accueil h1 &gt; a:hover {
   color:rgba(96, 134, 238, 0.877);
}
#accueil h2:hover {
   transform: scale(1.8);
   transition: ease 0.1;
}

#accueil h2 &gt; a:hover {
   color:rgba(248, 20, 4, 0.877);
}

.menu a {
   text-decoration: none;
   color : rgb(185, 185, 184);
}

#apropos {
   height: 950px;
   max-height: 950px;
   display: flex;
   flex-wrap: wrap;
   margin-bottom: 0;
}

#apropos img {
   height: 650px;
}

.bckgrd2 {
   background-image: url(../images/wallpaper.jpg) ;
   background-repeat:no-repeat;
   background-size: cover;
}

#apropos h2 {
   font-size: 3.5vw;
   width: 100%;
   height: 3vw;
   padding-left: 30px;
   margin-bottom: 60px;
}

div.infos {
   padding-left: 50px;
   padding-bottom: 400px;
}

.avatar {
   width: 30%;
   height: auto;
   display: flex;
   margin: 2%;
}

.infos {
   font-size: 1vw;
   width: 60%;
   display: flex;
   flex-direction: column;
   justify-content: flex-start;
   align-items: flex-start;
}

.infos a {
   text-decoration: none;
   color: gray;
}

.infos p {
   color: rgba(96, 134, 238, 0.877);
   font-size: 1.2vw;
   font-style: italic;
   width: 570px;
}

.infos ul {
   font-size: 1.1vw;
   color: rgba(248, 20, 4, 0.877);
}

.infos button {
   width: 5rem;
   padding: 5px;
   background-color: rgb(179, 177, 177);
}

.infos &gt; button &gt; a {
   font-size: 1rem;
   font-weight:bold;
   color: white;
}

#contact {
   height: 950px;
   max-height: 950px;
   display: flex;
   flex-direction: row;
   flex-wrap: wrap;
   justify-content: center;
}

.bckgrd3 {
   background-image: url(../images/wallpaperflare.com_wallpaper2.jpg) ;
   background-repeat:no-repeat;
   background-size: cover;
}

#contact h2 {
   font-size: 3.5vw;
   width: 100%;
   height : 20%;
   padding-left: 30px;
}

#contact p {
   color:rgb(255, 255, 255);
   padding-left: 800px;
}

#contact button {
   margin-left: 800px;
   margin-top: 25px;
   margin-bottom: 50px;
   width: 5rem;
   padding: 5px;
   font-size: 1rem;
   font-weight:bold;
   background-color: gray;
   color: white;
}

#contact textarea {
   overflow: scroll;
}

.map {
   width: 40%;
   height: 50px;
   padding-bottom: 100px;
}

.coordonnees {
   height: 500px;
   display: flex;
   flex-direction: column;
   justify-content: start;
}

.coordonnees &gt; p &gt; a {
   color: yellow;
}

input:placeholder-shown {
   font-style: italic;
}


</pre>

<p class="resultat">Voir le résultat <a href="./portfolio/index.html" target="_blank">ici</a>.</p>

<?php require 'footer.php'; ?>