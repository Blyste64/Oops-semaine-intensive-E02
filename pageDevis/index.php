<!DOCTYPE html>

<?php

$bdd = new PDO('mysql:host=localhost;dbname=devis;charset=utf8', 'root', 'root'); //connexion a la base de donnée 
?>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="styles/general.css">
    <link rel="stylesheet" href="styles/anime.css">
    
    <title>Formulaire</title>
  </head>
  <body>
      <img class="jess_blondeDevis" width="100" height="auto" src="images/jess_blonde.png"/>
   <img class="marcel_hipsterDevis" width="120" height="auto" src="images/marcel_hipster.png"/>
   <img class="papi_richardDevis" width="120" height="auto" src="images/papi_richard.png"/>
   <div class="paroleDevis"><p>Tu peux nous contacter pour un devis ici</p></div>


    <div id="forme">
      <form action="devis.php" method="post">
        <label for="objet" class="apparaitreB" >L'objet de ma demande est</label>
        <input type="text" name="objet" class="apparaitre" onkeypress=changerClasse1(),changerClasseB1(); /><br>
        <label for="nom" class="labelDevis" id="label1">Mon nom est</label>
        <input type="text" name="nom" class="inputDevis" id="input1"onkeypress=changerClasse2(),changerClasseB2(); /><br>
        <label for="entreprise" class="labelDevis" id="label2">mon entreprise est </label>
        <input type="text" name="entreprise" class="inputDevis" id="input2" onkeypress=changerClasse3(),changerClasseB3(); /><br>
        <label for="ville" class="labelDevis" id="label3">localisée à </label>
        <input type="text" name="ville" class="inputDevis" id="input3" onkeypress=changerClasse4(),changerClasseB4(); /><br>
        <label for="salarie" class="labelDevis" id="label4" >Le nombre de salarié est de </label>
        <input type="number" name="salarie" class="inputDevis" id="input4" onkeypress=changerClasse5(),changerClasseB5(); /><br>
        <label for="tel" class="labelDevis" id="label5">Voici mon numero de telephone </label>
        <input type="number" name="tel" class="inputDevis" id="input5" onkeypress=changerClasse6(),changerClasseB6(); /><br>
        <label for="mail" class="labelDevis" id="label6">et mon email</label>
        <input type="email" name="mail" class="inputDevis" id="input6" onkeypress=changerClasse7(),changerClasseB7(); /><br>
        <label for="comment" class="labelDevis" id="label7">Je voudrais rajouté</label>
        <input type="text" name="comment" class="inputDevis" id="input7" onkeypress=changerClasse8(),changerClasseB8(); /><br>
        <input type="submit" name="send" value="SUBMIT" class="bouton" /> 
      </form>
    </div>


    <!-----connexion----->
    <a href="formConnexion.php">Connection</a>

    <script src="scripts/input.js"></script>
    <script src="scripts/lancementAnim.js"></script>
  </body>
</html>