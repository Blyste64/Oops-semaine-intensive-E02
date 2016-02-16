<?php

session_start();
//base de donné pour la connexion 
$BDD = mysql_connect("localhost","root","root");  
mysql_select_db("devis");       

//base de donné pour les devis 

$bdd = new PDO('mysql:host=localhost;dbname=devis;charset=utf8', 'root', 'root');

//creation du tableau contenant les devis 
$devis = array();

//selection des information de la base de donné 
$selectAll_q = $bdd->prepare("SELECT id, nom, entreprise, comment, mail, objet,tel, salarie, ville FROM form ORDER BY id DESC"); 
$selectAll_q->execute();
//boucle permettant de recuperer a la suite toute les information de la table et remplissage du tableau devis 
while($result = $selectAll_q->fetch(PDO::FETCH_ASSOC))
{
  $devis[] = $result;
}

//message de connexion et d'erreur mit a faux 
$error = FALSE;
$connexionOK = FALSE;


// verification de l'utilisation du bouton de connexion 
if(isset($_POST["connexion"])){

  // remplissage des champs  
  if($_POST["admin"] == NULL OR $_POST["pass"] == NULL){

    $error = TRUE;

    $errorMSG = "Vous devez remplir tout les champs !";

  }

  // si c'est bon on regarde si les identifiant conresponde au identifiant contenu dans la base de donnée 
  else{

    $sql = "SELECT mail FROM admin WHERE admin = '".$_POST["admin"]."' ";

    $req = mysql_query($sql);

    if($sql){ //si c'est bon 
      // On sélectionne toute les données dans la base admin
      $sql = "SELECT * FROM admin WHERE admin = '".$_POST["admin"]."' ";
      $req = mysql_query($sql);

      if($sql){ //si c'est bon 

        // On récupère toute les données
        $donnees = mysql_fetch_assoc($req);

        // on regarde si le mot de passe correseponde bien avec celui de la base de donnée         
        if($_POST["pass"] == $donnees["pass"]){

          $connexionOK = TRUE; // on passe connexion a vraie 
          // on creer une variable qui contient le message de connexion 
          $connexionMSG = "Connexion au site réussie. Vous êtes désormais connecté !";

          // on remplit les variable session avec les post admin et pass
          $_SESSION["admin"] = $_POST["admin"];

          $_SESSION["pass"] = $_POST["pass"];
?>


<!--------------------affichage des devis ------------------>
<ul id="devis">
  <?php



          foreach($devis as $nw) //on creer une boucle pour afficher les devis et on dit que devis devient maintenant nw (news)
          {
            echo '

 <article class="corps">

  <h2><a href="#">'.$nw['objet'].'</a></h2>

 <h3><a href="#">'.$nw['nom'].'</a></h3>



 <h3><a href="#">'.$nw['entreprise'].'</a></h3>


 <p>'.$nw['ville'].'</p>
  <p>'.$nw['tel'].'</p>
   <p>'.$nw['salarie'].'</p>
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
<?php

          /* affichage des erreur */

          // si tous ca n'est pas bon on affiche a chaque foie les erreur 
        }

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
?>

<? mysql_close($BDD);

?>



<?php if($error == TRUE){ echo "<p><strong>".$errorMSG."</strong></p>"; } ?>

<?php if($connexionOK == TRUE)
{ echo "<p><strong>".$connexionMSG."</strong></p>"; } 

?>
