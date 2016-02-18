<!DOCTYPE html>

<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles/general.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="styles/anime.css">
    <script src="jquery.js"></script>
    <title>Administration</title>
  </head>
  <body>



  
  
  
<?php

session_start();
    
//base de donné pour la connexion 
$BDD = mysql_connect("localhost","root","root");  
mysql_select_db("devis");       

//base de donné pour les devis 
$bdd = new PDO('mysql:host=localhost;dbname=devis;charset=utf8', 'root', 'root');

$validation = FALSE;

if(isset($_POST["sup"])) //S'l appuie sur le bouton sup
{
  $id = $_GET['delete']; 
  
  //On fait une requête sql qui fait passer le valide de la table qui était à 1 à 0
  $delete_q = $bdd->prepare("UPDATE form SET valid = '0' WHERE id = :id");
  $delete_q->execute(array(
    'id' => $id
  ));
  $validation = TRUE; //On passe la valeur qui validera le rechargement de la page sans identifiant 
}



//Création du tableau contenant les devis 
$devis = array();

//Sélection des informations de la base de données
$selectAll_q = $bdd->prepare("SELECT id, nom, entreprise, comment, mail,tel, salarie, ville, type,service FROM form WHERE valid = '1' ORDER BY id DESC"); 
$selectAll_q->execute();
    
//Boucle permettant de récupérer à la suite toutes les informations de la table et remplissage du tableau devis 
while($result = $selectAll_q->fetch(PDO::FETCH_ASSOC))
{
  $devis[] = $result;
}

//Message de connexion et d'erreur mis à faux 
$error = FALSE;
$connexionOK = FALSE;
    
    
    //S'il passe par le bouton de connexion 
if(isset($_POST["connexion"])){

  //Remplissage des champs  
  if($_POST["admin"] == NULL OR $_POST["pass"] == NULL){

    $error = TRUE;

    $errorMSG = "Vous devez remplir tout les champs !";

  }

  //Si c'est bon on regarde si les identifiants conrespondent au identifiant contenu dans la base de données
  else{
  // requete sql 
    $sql = "SELECT mail FROM admin WHERE admin = '".$_POST["admin"]."' ";
    $req = mysql_query($sql);

    //si c'est bon 
    if($sql){ 
      
      // On sélectionne toutes les données dans la base admin
      $sql = "SELECT * FROM admin WHERE admin = '".$_POST["admin"]."' ";
      $req = mysql_query($sql);
      
      //si c'est bon 
      if($sql){ 

        // On récupère toute les données
        $donnees = mysql_fetch_assoc($req);

        // on regarde si le mot de passe correspond bien avec celui de la base de données         
        if($_POST["pass"] == $donnees["pass"]){
          
          // on passe connexion à vrai 
          $connexionOK = TRUE; 
          
          // on créé une variable qui contient le message de connexion 
          $connexionMSG = "Connexion au site réussie. Vous êtes désormais connecté !";

          // on remplit les variables sessions avec les post admin et pass
          $_SESSION["admin"] = $_POST["admin"];

          $_SESSION["pass"] = $_POST["pass"];

          // on passe validation à vrai pour permettre la connection 
          $validation = TRUE;
          
        }

          /* affichage des erreurs */

          // si tous ça n'est pas bon on affiche a chaque fois les erreurs
       

        // message d'erreur.
        else{

          $error = TRUE;

          $errorMSG = "Nom de compte ou mot de passe incorrect !";

        }

      }

      //message d'erreur.      
      else{

        $error = TRUE;

        $errorMSG = "Nom de compte ou mot de passe incorrect !";

      }

    }

    //message d'erreur.      
    else{

      $error = TRUE;

      $errorMSG = "Nom de compte ou mot de passe incorrect !";

    }

  }

}

    
    // si la variable validation a été mis à vrai on peut accéder au contenu de  la page 
if($validation == TRUE){ 

?>



    <!--------------------affichage des devis ------------------>
    
     <ul id="devis">
      <?php


  foreach($devis as $nw) //on créé une boucle pour afficher les devis et on dit que devis devient maintenant nw (news)
  {
    echo '
              <img class="picto1" width="60" height="auto" src="images/picto/picto_1.png"/>
              <img class="picto2" width="60" height="auto" src="images/picto/picto_2.png"/>
              <img class="picto3" width="60" height="auto" src="images/picto/picto_3.png"/>
              <img class="picto4" width="60" height="auto" src="images/picto/picto_4.png"/>
              <img class="picto5" width="60" height="auto" src="images/picto/picto_5.png"/>
              <img class="picto6" width="60" height="auto" src="images/picto/picto_6.png"/>
              <img class="picto7" width="60" height="auto" src="images/picto/picto_7.png"/>
              <img class="picto8" width="60" height="auto" src="images/picto/picto_8.png"/>
              <img class="picto9" width="60" height="auto" src="images/picto/picto_9.png"/>
              <img class="picto10" width="60" height="auto" src="images/picto/picto_10.png"/>
              <img class="picto11" width="60" height="auto" src="images/picto/picto_11.png"/>
              <img class="picto12" width="60" height="auto" src="images/picto/picto_15.png"/>

             <article class="corps">

              <h2 class="objet"><a href="#">'.$nw['type'].'</a></h2>

              <h3 class="secondaire"><a href="#">Nom : '.$nw['nom'].'</a></h3>
              <h3 class="secondaire"><a href="#"> Nom de la compagnie  : '.$nw['entreprise'].'</a></h3>



              <p class="info">ville : '.$nw['ville'].'</p>
              <p class="info"> Nombre de salarié '.$nw['salarie'].'</p>
              <p class="info">Commenataire :  '.$nw['comment'].'</p>
               <p class="info">Email : '.$nw['mail'].'</p>
              <p class="info">Télephone : '.$nw['tel'].'</p>

              <form action="connexion.php?delete='.$nw['id'].'" method="post">
              <input type="submit" name="sup" value="Supprimer" class="boutonSUP" />
              </form>
              
            <form action="mailto:'.$nw['mail'].'" method="post">
              <input type="submit" name="repondre" value="Répondre" class="boutonREP" />
              </form>


              <div class="clear"></div>

             </article>';
}
      ?>
    </ul>

    <?php 
}
    ?>


    <? mysql_close($BDD);// on ferme la base de donné 

    ?>

<!-- on initialise les message d'alerte et d'erreir -->
<div class="messageAlerte">
    <?php if($error == TRUE){ echo 
  "  <a class='alertA'  href='formConnexion.php'>retourner a la page de connexion</a>
       <img class='girls_brownMess' width='100' height='auto' src='images/girl_brown.png'/>
   <img class='homme_affaireMess' width='120' height='auto' src='images/marcel_hipster.png'/>
   <img class='mechant' width='100' height='auto' src='images/picto_2.png'/>

   <div class='parole'><p>$errorMSG</p></div'"; } ?></div>

  </body>
</html>