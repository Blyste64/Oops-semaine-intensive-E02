<!DOCTYPE html>

<?php

$bdd = new PDO('mysql:host=localhost;dbname=devis;charset=utf8', 'root', 'root'); //connexion a la base de donnée 

/*$devis = array();

$selectAll_q = $bdd->prepare("SELECT id, nom, prenom, comment, mail, objet FROM form ORDER BY id DESC"); # Selection de toutes les news valides
$selectAll_q->execute();

while($result = $selectAll_q->fetch(PDO::FETCH_ASSOC))
{
 $devis[] = $result; # Replissage du tableau avec ces valeurs
}*/
?>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="styles/style.css">
    <title>formulaire</title>
  </head>
  <body>
    <div id="forme">
      <form action="devis.php" method="post">
        <p><input type="text" placeholder="objet" name="objet"/>

        <p><input type="text" placeholder="votre nom" name="nom"/>

          <input type="text" placeholder="entreprise" name="entreprise"/>

          <input type="text" placeholder="ville" name="ville"/>

          <input type="number" placeholder="salarie" name="salarie"/>

          <input type="number" placeholder="telephone" name="tel"/>

        <p><input type="email" placeholder="email" name="mail"/>

          <input type="text" placeholder="commenataire" name="comment"/>

          <input type="submit" name="send" value="envoyer votre demande de devis " class="bouton" /> </p>
      </form> 
    </div>


    <!--------liste des devis ----------->

    <ul id="news">
      <?php
      /*
 foreach($devis as $nw) # Boucle qui affiche les news
 {
 echo '

 <article class="corps">

  <h2><a href="#">'.$nw['objet'].'</a></h2>

 <h3><a href="#">'.$nw['nom'].'</a></h3>



 <h3><a href="#">'.$nw['prenom'].'</a></h3>



 <p>'.$nw['comment'].'</p>

 <p>'.$nw['mail'].'</p>

 <p><a href="#"> Voir l\'actualité</a></p>
 <p><a href="actu.php?delete='.$nw['id'].'">Supprimer</a></p>
 </div>
 </div><!-- /.entry-content -->

 </article>';
 }

 */?>
    </ul>

    <!--------connexion ----------->


    <form action="connexion.php" method="post" >

      <p><input type="admin" name="admin" class="emailA"/>

        <input type="password" name="pass" class="motdepasseA" />

        <input type="submit" name="connexion" value="connectez vous" class="boutonconnexion" /></p>

    </form>


    </div>
  </div>  


</body>
</html>
