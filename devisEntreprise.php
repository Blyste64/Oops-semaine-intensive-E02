<!DOCTYPE html>


<html lang="fr">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
	<link rel="stylesheet" href="styles/bootstrap.min.css" />
	<link rel="stylesheet" href="styles/devis.css">
	<link rel="stylesheet" href="webkit/stylesheet.css">
	<title>Devis Entreprises</title>
</head>


<body id="entreprise">
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
		<section id="contenu">
	<div id="map">

		<p id="entreprise">Faites comme eux,
			<br>travaillez avec nous !</p>

	</div>

	<div id="forme">
		<h1>Entreprises</h1>

		<form action="index.html" method="post">



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
	</section>
	
	<footer>
		<div id="all" class=" col-md-offset-1 col-md-10 col-sm-offset-1 col-sm-10 col-xs-12">
			<div class="footcol-md-2 col-sm-2 col-xs-4"><a href="#" title="suivez-nous">Blog</a></div>
			<div class="foot col-md-2 col-sm-2 col-xs-4"><a href="#" title="remerciement">Merci !</a></div>
			<div class="foot col-md-2 col-sm-2 col-xs-4"><a href="#" title="FAQ">FAQ</a></div>
			<div class="foot col-md-2 col-sm-2 col-xs-4"><a href="#" title="contact">Contact</a></div>
			<div class="foot col-md-2 col-sm-2 col-xs-4"><a href="#" title="CVG">CVG</a></div>
			<div class="foot col-md-2 col-sm-2 col-xs-4"><a href="#" title="mention">Mention</a></div>
		</div>

		<div class="clearBoth"></div>
	</footer>
	
	<script src="scripts/devis.js"></script>
</body>

</html>