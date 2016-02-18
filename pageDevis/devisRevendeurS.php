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

  //Connection à la base de données
$BDD = mysql_connect("localhost","root","root");
mysql_select_db("devis");

?>

<?php

//Création des variables pour les messages d'erreur et initialisé à faux 
$error = FALSE;
$sendOK = FALSE;

//S'il passe par le formulaire d'envoi de devis 
if(isset($_POST["send"])){ 

  //On verifie que tous les champs sont remplis
  if($_POST["entreprise"] == NULL OR $_POST["nom"] == NULL OR $_POST["mail"] == NULL OR $_POST["ville"] == NULL OR $_POST["service"] == NULL OR $_POST["tel"] == NULL){
    
    //S'ils sont pas remplis on affiche les erreurs 
    $error = TRUE;
    $errorMSG = "Tous les champs doivent être remplis !";

  }


  else {
    
    //Sinon on insert dans la base de données les valeurs entrées par l'utilisateur 
    $sql = "INSERT INTO form (nom,entreprise,mail,comment,objet,ville,service,tel,valid,type) VALUES ('".$_POST["nom"]."','".$_POST["entreprise"]."','".$_POST["mail"]."','".$_POST["comment"]."','".$_POST["objet"]."','".$_POST["ville"]."','".$_POST["service"]."','".$_POST["tel"]."','1','revendeur')";
    $sql = mysql_query($sql);
    
    //On affiche les messages de validation de l'envoi
    $sendOK = TRUE;
    $sendMSG = "Votre demande a bien été prise en compte";
  }
}

?>

<?php

mysql_close($BDD);

?>

<body>

<div class="messageAlerte">
  <?php
  //On initialise les messages d'alertes et d'erreurs 
  
  if($error == TRUE){ echo "
  <a class='alertA'  href='devisEntreprise.php'>Retourner à la page de devis</a>
       <img class='girls_brownMess' width='100' height='auto' src='images/girl_brown.png'/>
   <img class='homme_affaireMess' width='120' height='auto' src='images/marcel_hipster.png'/>
   <img class='mechant' width='100' height='auto' src='images/picto_2.png'/>

   <div class='parole'><p>$errorMSG</p></div'"; }
  ?>
  <?php 
  if($sendOK == TRUE){ echo "
  <a class='alertA' href='devisEntreprise.php'>Retourner à la page de devis</a>
     <img class='girls_brownMess' width='100' height='auto' src='images/girl_brown.png'/>
   <img class='homme_affaireMess' width='120' height='auto' src='images/marcel_hipster.png'/>
   <img class='mechant' width='100' height='auto' src='images/picto_10.png'/>

   <div class='parole'><p><strong>".$sendMSG."</strong></p></div'"; }
  ?>
</div>

</body>
</html>
