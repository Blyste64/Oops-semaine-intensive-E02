<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
	<title>Connexion</title>
	<link rel="stylesheet" href="styles/bootstrap.min.css" />
	<!-- Bootstrap -->
	<link rel="stylesheet" href="styles/general.css">
	<link rel="stylesheet" href="styles/anime.css">
	<link rel="stylesheet" href="webkit/stylesheet.css">
</head>

<body>
	<header id="header">
		<div class="bgBlank">
			<div class="col-xs-4 col">
				<a href="index.html" title="accueil"><img src="images/logo_oops.png" alt="Logo oops" /></a>
				<span class="citation">Un clic pour tout retrouver...<br>Même le sourire !</span>
			</div>
			<div class="col-xs-8 menu">
				<nav>
					<ul class="menuNormal">
						<li><a href="#" title="devis" class="menuDevis">Contact</a>
							<ul class="sousMenu">
								<li><a href="devisEntreprise.php" title="devisEntreprise">Entreprise</a></li>
								<li><a href="devisRevendeur.php" title="devisRevendeur">Revendeur</a></li>
							</ul>
						</li>
						<li><a href="index.html" title="Aventure">Aventure</a></li>
						<li><a href="formConnexion.php" title="Connexion">Espace membre</a></li>
					</ul>
					<ul class="menuBurger">
						<li>
							<div class="navbar-inverse ">
								<button type="button" class="navbar-toggle" data-toggle="collapse" id="burger" data-target=".navbar-collapse">
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>
							<ul>
								<li><a href="formConnexion.php" title="connexion">Espace membre</a></li>

								<li><a href="index.html" title="aventure">Aventure</a></li>
								<li><a href="#" title="devis" class="menuDevis">Contact</a>
									<ul class="sousMenu">
										<li><a href="devisEntreprise.php" title="devisEntreprise">Entreprise</a></li>
										<li><a href="devisRevendeur.php" title="devisRevendeur">Revendeur</a></li>
									</ul>
								</li>
							</ul>
						</li>
					</ul>
				</nav>
			</div>
		</div>
	</header>
	<img class="girls_brownCo" width="100" height="auto" src="images/girl_brown.png" />
	<img class="homme_affaireCo" width="120" height="auto" src="images/marcel_hipster.png" />



	<div id="formConnexion">
		<p class="connexion">Connectez-vous pour voir vos nouveaux devis</p>
		<form action="connexion.php" method="post">
			<input type="admin" name="admin" class="inputConnexion" />
			<input type="password" name="pass" class="inputConnexion" />
			<input type="submit" name="connexion" value="Se connecter" class="boutonConnexion" />
		</form>
	</div>
</body>

</html>