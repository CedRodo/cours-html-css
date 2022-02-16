<?php require 'header.php'; ?>
<?php if (isset($_SESSION['user'])==false) { header('location: backend/identification.php'); die; } ?>
<div class="polices">
<h1>POLICES</h1>

<p class="contenu">Contenu de code :</p>

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

<p class="resultat">Résultat :</p>

<!-- CSS -->
<div class="stylepolices">

<style> /*  la classe "stylepolices" est utilisée pour séparer les styles CSS interne et externe */

.stylepolices body {
font-style: italic;
background-color:rgb(202, 163, 163);
background-image: url(../images/logoduclub.jpg);
background-repeat: no-repeat; /* repeat-x, repeat-y, no-repeat */
background-position: top;
background-size: 50%;
}

.stylepolices h1 {
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

.stylepolices p {
    text-align: justify;
    border: 5px black double;
    border-radius: 15px 7px 30px 0px;
    background-color: coral;
    box-shadow: 10px 10px 20px black;
    color:blue;
}

</style>

<h1>Formatage du texte</h1>
    <a class="lien" href="">Un lien</a>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent commodo nisl non ante venenatis luctus tincidunt sit
    amet erat. Nunc et sapien eget lacus vestibulum sodales ut vestibulum mi. Nulla dapibus ante ac lectus scelerisque
    auctor. Duis eu orci sagittis, euismod tellus eu, efficitur odio. Pellentesque habitant morbi tristique senectus et
    netus et malesuada fames ac turpis egestas. Pellentesque habitant morbi tristique senectus et netus et malesuada fames
    ac turpis egestas. Etiam tincidunt dolor sem, eu vestibulum felis congue quis. Nulla aliquet pellentesque purus eget
    auctor. Etiam fermentum finibus nibh nec pulvinar. Vestibulum aliquet ex turpis, quis varius ex commodo a. Mauris rutrum
    posuere nulla quis ornare. Morbi condimentum et nibh eget pulvinar. Sed tempor odio sapien, elementum pharetra ex
    lobortis id. Nunc nec massa purus. Quisque metus est, rhoncus quis mauris ut, vulputate sollicitudin enim.</p>

</div>
</div>
<?php require 'footer.php'; ?>