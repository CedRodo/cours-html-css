<?php require('header.php') ?>
<div class="cvdevweb">
<h1>CV DE DÉVELOPPEUR WEB ET WEB MOBILE</h1>
<p style="margin: 100px 30px 100px 0px; text-align:end;">Le CV est disponible <a class="pdf" href="cvdevweb/index.html" target="_blank">ici</a></p>

<p class="contenu">Contenu de code :</p>

<pre>

&lt;!-- *** Contenu du HTML *** --&gt;

&lt;!DOCTYPE html&gt;
&lt;html lang=&quot;fr&quot;&gt;
&lt;head&gt;
   &lt;meta charset=&quot;UTF-8&quot;&gt;
   &lt;meta http-equiv=&quot;X-UA-Compatible&quot; content=&quot;IE=edge&quot;&gt;
   &lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1.0&quot;&gt;
   &lt;title&gt;CV D&eacute;veloppeur WEB et WEB mobile - C&eacute;dric Rodony&lt;/title&gt;
   &lt;link rel=&quot;stylesheet&quot; media=&quot;screen and (max-width: 768px)&quot; href=&quot;prop_css/mobile.css&quot;&gt;
   &lt;link rel=&quot;stylesheet&quot; media=&quot;screen and (min-width: 768px) and (max-width: 1024px)&quot; href=&quot;prop_css/tablet.css&quot;&gt;
   &lt;link rel=&quot;stylesheet&quot; media=&quot;screen and (min-width: 1024px)&quot; href=&quot;prop_css/laptop.css&quot;&gt;
   &lt;link rel=&quot;stylesheet&quot; href=&quot;prop_css/polices.css&quot;&gt;
&lt;/head&gt;
&lt;body&gt;
   
   
   &lt;section class=&quot;header&quot;&gt;
       &lt;div id=&quot;nom&quot;&gt;
       &lt;figure class=&quot;floatLeft&quot;&gt;&lt;img src=&quot;images/dudley.jpg&quot; alt=&quot;Avatar&quot;&gt;
           &lt;figcaption&gt;C&eacute;dric Rodony&lt;/figcaption&gt;
       &lt;/figure&gt;
       &lt;/div&gt;
       &lt;div class=&quot;devWeb&quot;&gt;
           &lt;h1&gt;D&Eacute;VELOPPEUR WEB ET WEB MOBILE&lt;/h1&gt;
       &lt;/div&gt;
   &lt;/section&gt;
   &lt;div class=&quot;separateur&quot;&gt;
   &lt;/div&gt;
   &lt;section class=&quot;cote&quot;&gt;
       &lt;section class=&quot;contact simpleBorder&quot;&gt;
           &lt;h2&gt;CONTACT&lt;/h2&gt;
           &lt;h3&gt;Adresse&lt;/h3&gt;
           &lt;p&gt;11, rue du Berry 94550 Chevilly-Larue&lt;/p&gt;
           &lt;h3&gt;Mail&lt;/h3&gt;
           &lt;p&gt;cedric.rodony@gmail.com&lt;/p&gt;
           &lt;h3&gt;T&eacute;l&eacute;phone&lt;/h3&gt;
           &lt;p&gt;0652392640&lt;/p&gt;&lt;br /&gt;
   &lt;/section&gt;
   &lt;section class=&quot;dessusDessous&quot;&gt;
       &lt;section class=&quot;experiences marginLeft&quot;&gt;
           &lt;h2 class=&quot;shaBox rightText&quot;&gt;EXP&Eacute;RIENCES&lt;/h2&gt;&lt;br /&gt;
           &lt;p class=&quot;marginLeft&quot;&gt;&lt;br /&gt;10/2017 - Auxiliaire de bureau&lt;br /&gt;&lt;br /&gt;01/2009 - Maintenance informatique aupr&egrave;s de particuliers&lt;br /&gt;&lt;br /&gt;08/2008 - Gardien d'immeuble&lt;br /&gt;&lt;br /&gt;09/2007 - Pr&eacute;parateur de commandes&lt;br /&gt;&lt;br /&gt;07/2004 - Testeur qualit&eacute; de r&eacute;seaux t&eacute;l&eacute;phoniques&lt;/p&gt;&lt;br /&gt;
       &lt;/section&gt;
   &lt;!--&lt;div class=&quot;separateur&quot;&gt;
   &lt;/div&gt;--&gt;
       &lt;section class=&quot;formations&quot;&gt;
           &lt;h2 class=&quot;shaBox rightText&quot;&gt;FORMATIONS&lt;/h2&gt;&lt;br /&gt;
           &lt;p class=&quot;marginLeft&quot;&gt;&lt;br /&gt;2001 - BTS Informatique et Gestion (inachev&eacute;)&lt;br /&gt;&lt;br /&gt;2000 - BAC STT Informatique de Gestion&lt;/p&gt;&lt;br /&gt;
       &lt;/section&gt;
   &lt;div class=&quot;separateur&quot;&gt;
   &lt;/div&gt;
   &lt;section class=&quot;competences&quot;&gt;
   &lt;h2 class=&quot;shaBox rightText&quot;&gt;COMP&Eacute;TENCES&lt;/h2&gt;&lt;br /&gt;

   &lt;ul class=&quot;marginLeft&quot;&gt;
   &lt;li&gt;Installation de syst&egrave;mes d'exploitation&lt;/li&gt;&lt;br /&gt;
   &lt;li&gt;Installation informatique : carte m&egrave;re, processeur, disque dur, etc.&lt;/li&gt;&lt;br /&gt;
   &lt;li&gt;Configuration standard d'un poste de travail&lt;/li&gt;&lt;br /&gt;
   &lt;/ul&gt;
&lt;/section&gt;
&lt;/section&gt;

&lt;/body&gt;
&lt;/html&gt;

&lt;!-- *** Contenu de la feuille CSS : "laptop.css" *** --&gt;

body {
    margin: 4em;
}

.floatLeft {
    float:inline-start;
}

h2.rightText {

    text-align: right;
}

.devWeb {
    display: flex;
    width: 100%;
    align-items: center;
    justify-content: center;
}

.experiences {
    display: flex;
    width: 70vw;
    flex-direction: column;
}

.formations {
    display: flex;
    width: 100%;
    flex-direction: column;
}

.competences {
    display: flex;
    width: 100%;
    flex-direction: column;
}

.contact {
    display: flex;
    width: 30%;
    align-items:stretch;
    justify-content: left;
    flex-direction: column;
}

.separateur {
    width: 100%;
    height: 5em;
}

p.marginLeft {
    margin-left: 50px;
}
ul.marginLeft {
    margin-left: 50px;
}

.cote {
    display: flex;

}

.header {
    display: flex;

}

.dessusDessous {
    display: flex;
    flex-direction: column;
}

/* Polices et bordures */

body {
    /* font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; */
    font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
}

.shaBox {
    border: 5px black double;
    border-radius: 15px 7px;
    box-shadow: 10px 10px 20px black;
    padding: 5px 20px 5px 20px;
    background-color: rgb(209, 97, 119);
}

.simpleBorder {
    padding: 0px 30px 0px 30px;
    margin : 70px 20px 0px 0px;
    background-color: rgb(126, 126, 240);
}

#nom {
    font-size: 25px;
    font: bold;
}

.devWeb {
    text-decoration: underline;
    font-size: 1.5em;
    font: bolder;
}

&lt;!-- *** Contenu de la feuille CSS : "tablet.css" *** --&gt;

body {
   margin: 4em;
}

.floatLeft {
   float:inline-start;
}

h2.rightText {

   text-align: right;
}

.devWeb {
   display: flex;
   width: 100%;
   align-items: center;
   justify-content: center;
}

.experiences {
   display: flex;
   width: 100%;
   flex-direction: column;
}

.formations {
   display: flex;
   width: 100%;
   flex-direction: column;
}

.competences {
   display: flex;
   width: 100%;
   flex-direction: column;
}

.contact {
   display: flex;
   flex-direction: column;
   justify-content: center;
   width: 100%;
}

.separateur {
   width: 100%;
   height: 5em;
}

p.marginLeft {
   margin-left: 50px;
}
ul.marginLeft {
   margin-left: 50px;
}

.header {
   display:flex;
   flex-direction: column;
   justify-content: center;
}

.dessusDessous {
   display: flex;
   flex-direction: column;
}

&lt;!-- *** Contenu de la feuille CSS : "mobile.css" *** --&gt;

body {
   margin: 4em;
}

.floatLeft {
   float:inline-start;
}

h2.rightText {

   text-align: right;
}

.devWeb {
   display: flex;
   width: 100%;
   align-items: center;
   justify-content: center;
}

.experiences {
   display: flex;
   width: 100%;
   flex-direction: column;
}

.formations {
   display: flex;
   width: 100%;
   flex-direction: column;
}

.competences {
   display: flex;
   width: 100%;
   flex-direction: column;
}

.contact {
   display: flex;
   flex-direction: column;
   justify-content: center;
   width: 100%;
}

.separateur {
   width: 100%;
   height: 5em;
}

p.marginLeft {
   margin-left: 50px;
}
ul.marginLeft {
   margin-left: 50px;
}

.header {
   display:flex;
   flex-direction: column;
   justify-content: center; /* J'ai essay&eacute; de centrer verticalement la photo et le titre &quot;D&eacute;veloppeur Web&quot;, sans succ&egrave;s */
   align-items: center;
}

.dessusDessous {
   display: flex;
   flex-direction: column;
}

body {
   /* font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; */
   font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
}

.shaBox {
   border: 5px black double;
   border-radius: 15px 7px;
   box-shadow: 10px 10px 20px black;
   padding: 5px 20px 5px 20px;
   background-color: rgb(209, 97, 119);
}

.simpleBorder {
   padding: 0px 30px 0px 30px;
   margin : 70px 20px 0px 0px;
   background-color: rgb(126, 126, 240);
}

#nom {
   font-size: 15px;
   font: bold;
}

.devWeb {
   text-decoration: underline;
   font-size: 1.5em;
   font: bolder;
}

&lt;!-- *** Contenu de la feuille CSS : "polices.css" *** --&gt;

body {
   /* font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; */
   font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
}

.shaBox {
   border: 5px black double;
   border-radius: 15px 7px;
   box-shadow: 10px 10px 20px black;
   padding: 5px 20px 5px 20px;
   background-color: rgb(209, 97, 119);
}

.simpleBorder {
   padding: 0px 30px 0px 30px;
   margin : 70px 20px 0px 0px;
   background-color: rgb(126, 126, 240);
}

#nom {
   font-size: 25px;
   font: bold;
}

.devWeb {
   text-decoration: underline;
   font-size: 1.5em;
   font: bolder;
}

</pre>

<p class="resultat">Voir le résultat <a href="./cvdevweb/index.html" target="_blank">ici</a>.</p>

<?php require('footer.php'); ?>