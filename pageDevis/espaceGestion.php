 
 <!DOCTYPE html>
 
 <?php

	$bdd = new PDO('mysql:host=localhost;dbname=devis;charset=utf8', 'root', 'root');

  $devis = array();
 
$selectAll_q = $bdd->prepare("SELECT id, nom, prenom, comment, mail, objet FROM form ORDER BY id DESC"); # Selection de toutes les news valides
$selectAll_q->execute();
 
while($result = $selectAll_q->fetch(PDO::FETCH_ASSOC))
{
 $devis[] = $result; # Replissage du tableau avec ces valeurs
}
  

?>
 <html lang="fr">
 <head>
   <meta charset="UTF-8">
   <title>gestion</title>
 </head>
 <body>
   
 </body>
 </html>
 
 <ul id="news">
 <?php
   
   
   
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
   
 
 ?>
 </ul>
    