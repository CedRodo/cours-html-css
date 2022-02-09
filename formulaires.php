<?php include('header.php'); ?>
<div class="formulaires">
<h1 class="bonjour">FORMULAIRES</h1>

<p class="contenu">Contenu de code :</p>

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


<!-- CSS --><style> /*  la classe "styleformulaires" est utilisée pour séparer les styles CSS interne et externe */
    :required {
        background-color: red;
    }
    
    .styleformulaires:focus {
        border-color: red;
    }
</style>

<p class="resultat">Résultat :</p>

    <form method="post" action="traitement_formulaire.php">
        <!-- Mettre obligatoirement des balises de type bloc à l'intérieur -->
        <fieldset>
            <legend>Vos coordonnées</legend>
        <p>
            <label for="prenom">Votre prénom : </label>
            <input type="text" name="prenom" id="prenom" size="30" placeholder="Merci d'entrer votre prénom" value="Cedric" required  /> <!-- required rend le champs obligatoire -->
        </p>

        <p>
            <label for="password">Votre password :</label>
            <input type="password" name="password" id="password" placeholder="Merci d'entrer votre password" />
        </p>

        <p>
            <label for="email">Votre email :</label>
            <input type="email" name="email" id="email" placeholder="Merci d'entrer votre email" />
        </p>
        
        <p>
            <label for="tel">Votre téléphone :</label>
            <input type="tel" name="tel" id="tel" placeholder="Merci d'entrer votre téléphone" />
        </p>
        </fieldset>
        <p>
            <label for="url">Votre adresse internet :</label>
            <input type="url" name="url" id="url" placeholder="Merci d'entrer votre adresse internet" />
        </p>

        <p>
            <label for="age">Votre âge :</label>
            <input type="number" name="age" id="age" placeholder="Merci d'entrer votre âge" min="18" max="60" step="2" />
        </p>

        <p>
            <label for="range">Range :</label>
            <input type="range" name="range" id="range" placeholder="Merci d'entrer votre range" min="0" max="100" step="2" />
        </p>

        <p>
            <label for="date">Date :</label>
            <input type="date" name="date" id="date" placeholder="Merci d'entrer votre date de naissance" />
        </p>

        <p>
            <label for="couleur">Couleur :</label>
            <input type="color" name="couleur" id="couleur" class="styleformulaires" />
        </p>

        <p>
            <label for="recherche">Recherche :</label>
            <input type="search" name="recherche" id="recherche" />
        </p>

        <p>
            <label for="message">Votre message : </label>
            <textarea name="message" id="message" cols="30" rows="10"></textarea>
        </p>

        <!-- Les cases à cocher : un choix multiple d'option -->
        <div>
            <p>Sélectionner les options désirées :</p>
            <p>
                <ul>
                    <li><input type="checkbox" name="option1" id="option1" checked /> <label for="option1">Option 1</label></lil>
                    <li><input type="checkbox" name="option2" id="option2" /> <label for="option2">Option 2</label></lil>
                    <li><input type="checkbox" name="option3" id="option3" /> <label for="option1">Option 3</label></lil>
                </ul>
            </p>
        </div>

        <!-- Les radios : un seul choix à cocher -->
        <div>
            <p>Sélectionner les options désirées :</p>
            <p>
                <ul>
                    <li><input type="radio" name="radio" id="radio" /> <label for="radio">Radio 1</label></lil>
                    <li><input type="radio" name="radio" id="radio" checked/> <label for="radio">Radio 2</label></lil>
                    <li><input type="radio" name="radio" id="radio" /> <label for="radio">Radio 3</label></lil>
                </ul>
            </p>
        </div>

        <!-- Les options : liste déroulante avec un seul choix à sélectionner -->
        <div>
            <p>Sélectionner votre pays :</p>
            <select name="pays" id="pays">
                <optgroup label="Europe"> <!-- Permet de regrouper les options par catégorie -->
                    <option value="France">France</option>
                    <option value="Italie">Italie</option>
                    <option value="Espagne">Espagne</option>
                </optgroup>
                <optgroup label="Amérique du Nord">
                    <option value="Canada">Canada</option>
                    <option value="USA">États-Unis</option>
                </optgroup>
            </select>
        </div>
        <input type="button" value="Envoyer" class="styleformulaires" />
        <button type="submit" class="styleformulaires">Envoyer</button>
        <button type="reset" class="styleformulaires">Réinitialiser</button>
        <input type="file" name="fichier" id="fichier" class="styleformulaires" />

    </form>

</div>

<?php include('footer.php'); ?>