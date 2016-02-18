<!DOCTYPE html>

  <html lang="fr">

  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="webkit/stylesheet.css">
    <link rel="stylesheet" href="styles/bootstrap.min.css" />
    <title>Devis entreprise</title>
  </head>



  <body id="entreprise">
   <header id="header">
    <div class="bgBlank">
      <div class="col-xs-4 col">
        <a href="../index.html" title="accueil"><img src="images/logo_oops.png" alt="Logo oops" /></a>
        <span class="citation">Un clic pour tout retrouver...<br>Même le sourire !</span>
      </div>
      <div class="col-xs-8 menu">
        <nav>
          <ul class="menuNormal">
            <li><a href="#" title="devis" class="menuDevis">Contact</a>
              <ul class="sousMenu">
                <li><a href="../pageDevis/devisEntreprise.php" title="devisEntreprise">Entreprise</a></li>
                <li><a href="../pageDevis/devisRevendeur.php" title="devisRevendeur">Revendeur</a></li>
              </ul>
            </li>
            <li><a href="index.html" title="Aventure">Aventure</a></li>
            <li><a href="#" title="Connexion">Espace membre</a></li>
          </ul>
          <ul class="menuBurger">
            <li>
              <div class="navbar-inverse ">
                <button type="button" class="navbar-toggle" data-toggle="collapse" id="burger" data-target=".navbar-collapse" onclick=changerClass()>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
              </div>
              <ul>
                <li><a href="#" title="connexion">Connexion</a></li>

                <li><a href="index.html" title="aventure">Aventure</a></li>
                <li><a href="#" title="devis" class="menuDevis">Devis</a>
                  <ul class="sousMenu">
                    <li><a href="../pageDevis/devisEntreprise.php" title="devisEntreprise">Entreprise</a></li>
                    <li><a href="../pageDevis/devisRevendeur.php" title="devisRevendeur">Revendeur</a></li>
                  </ul>
                </li>
              </ul>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </header>
    <div id="map">

      <p id="entreprise">Faites comme eux,
        <br>travaillez avec nous !</p>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12" id="forme">
      <h1>Entreprises</h1>

      <form action="../index.html" method="post">



        <label for="nom" class="initLabel">Bonjour, je m'appelle</label>
        <input type="text" name="nom" class="initInput" />
        <br>

        <label for="entreprise" class="labelDevis">mon entreprise est </label>
        <input type="text" name="entreprise" class="inputDevis" />
        <br>

        <label for="ville" class="labelDevis">et est localisée à </label>
        <input type="text" name="ville" class="inputDevis" />
        <br>

        <label for="salarie" class="labelDevis">Le nombre de salarié est de </label>
        <input type="number" name="salarie" class="inputDevis" />
        <br>

        <label for="tel" class="labelDevis">Voici mon numéro de téléphone </label>
        <input type="number" name="tel" class="inputDevis" />
        <br>

        <label for="mail" class="labelDevis">et mon email</label>
        <input type="email" name="mail" class="inputDevis" />
        <br>

        <label for="comment" class="labelDevis">Je voudrai rajouter</label>
        <input type="text" name="comment" class="inputDevis" />


        <input type="submit" name="send" value="SUBMIT" class="bouton" id="entreprise" />
      </form>
    </div>


    <script src="scripts/main.js"></script>
  </body>

  </html>