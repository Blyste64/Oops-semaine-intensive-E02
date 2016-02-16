
<?php

session_start();

$BDD = mysql_connect("localhost","root","root");
mysql_select_db("devis");

?>

<?php

//creation des variable pour les message d'erreur et initialisé a faux 
$error = FALSE;
$sendOK = FALSE;


if(isset($_POST["send"])){ // si il passe par le formulaire d'envoie de devis 

  //on verifie que tous les champs son rempli
  if($_POST["entreprise"] == NULL OR $_POST["nom"] == NULL OR $_POST["mail"] == NULL OR $_POST["comment"] == NULL OR $_POST["objet"] == NULL OR $_POST["ville"] == NULL OR $_POST["salarie"] == NULL OR $_POST["tel"] == NULL){
    //si il sont pas rempli on affiche les erruer 
    $error = TRUE;
    $errorMSG = "Tout les champs doivent être remplis !";

  }


  else {
    // sinon on insert dans la base de donnée les valeur entrée par l'utilisateur 
    $sql = "INSERT INTO form (nom,entreprise,mail,comment,objet,ville,salarie,tel) VALUES ('".$_POST["nom"]."','".$_POST["entreprise"]."','".$_POST["mail"]."','".$_POST["comment"]."','".$_POST["objet"]."','".$_POST["ville"]."','".$_POST["salarie"]."','".$_POST["tel"]."')";
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

<div id="message">
  <?php 
  if($error == TRUE){ echo "<p>".$errorMSG."</p>"; }
  ?>
  <?php 
  if($sendOK == TRUE){ echo "<p><strong>".$sendMSG."</strong></p>"; }
  ?>
</div>
