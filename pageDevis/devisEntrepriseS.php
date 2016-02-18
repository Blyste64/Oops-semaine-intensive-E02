<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
      <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="styles/general.css">
    <link rel="stylesheet" href="styles/anime.css">
    
</head>

  

<?php

session_start();

  //connection a la base de donné 
$BDD = mysql_connect("localhost","root","root");
mysql_select_db("devis");

?>

<?php

//creation des variable pour les message d'erreur et initialisé a faux 
$error = FALSE;
$sendOK = FALSE;

// si il passe par le formulaire d'envoie de devis 
if(isset($_POST["send"])){ 

  //on verifie que tous les champs son rempli
  if($_POST["entreprise"] == NULL OR $_POST["nom"] == NULL OR $_POST["mail"] == NULL OR $_POST["ville"] == NULL OR $_POST["salarie"] == NULL OR $_POST["tel"] == NULL){
    
    //si il sont pas rempli on affiche les erruer 
    $error = TRUE;
    $errorMSG = "Tout les champs doivent être remplis !";

  }


  else {
    
    // sinon on insert dans la base de donnée les valeur entrée par l'utilisateur 
    $sql = "INSERT INTO form (nom,entreprise,mail,comment,objet,ville,salarie,tel,valid,type) VALUES ('".$_POST["nom"]."','".$_POST["entreprise"]."','".$_POST["mail"]."','".$_POST["comment"]."','".$_POST["objet"]."','".$_POST["ville"]."','".$_POST["salarie"]."','".$_POST["tel"]."','1','entreprise')";
    $sql = mysql_query($sql);
    
    //on affiche les message de validation de l'envoie 
    $sendOK = TRUE;
    $sendMSG = "votre demande a bien été pris en compte";
  }
}

?>

<?php

mysql_close($BDD);

?>

<body>

<div class="messageAlerte">
  <?php
  // on initialise les message d'alerte et d'erreur 
  
  if($error == TRUE){ echo "
  <a class='alertA'  href='devisEntreprise.php'>retourner a la page de devis</a>
       <img class='girls_brownMess' width='100' height='auto' src='images/girl_brown.png'/>
   <img class='homme_affaireMess' width='120' height='auto' src='images/marcel_hipster.png'/>
   <img class='mechant' width='100' height='auto' src='images/picto_2.png'/>

   <div class='parole'><p>$errorMSG</p></div'"; }
  ?>
  <?php 
  if($sendOK == TRUE){ echo "
  <a class='alertA' href='devisEntreprise.php'>retourner a la page de devis</a>
     <img class='girls_brownMess' width='100' height='auto' src='images/girl_brown.png'/>
   <img class='homme_affaireMess' width='120' height='auto' src='images/marcel_hipster.png'/>
   <img class='mechant' width='100' height='auto' src='images/picto_10.png'/>

   <div class='parole'><p><strong>".$sendMSG."</strong></p></div'"; }
  ?>
</div>

</body>
</html>
