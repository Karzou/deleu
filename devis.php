<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="style.css" />
		<title>Deleu Work</title>
	</head>
	
	<body>
		<div id="bloc_page">
			<header>
				<div id="titre_principal">
					<div id="logo">
						<img src="images/logo.png" alt="Logo" />
						<h1>Christophe Deleu</h1>
					</div>
					<h2>Entrepreneur jardinnage, élagage</h2>
				</div>
				
				<nav>
					<ul>
						<li><a href="index.php">Accueil</a></li>
						<li><a href="réalisations.php">Réalisations</a></li>
						<li><a href="devis.php">Devis</a></li>
						<li><a href="mailto:christophe@deleu.work">Contact</a></li>
					</ul>
				</nav>
			</header>
			
			<div id="banniere_image">
				<div id="banniere_descritpion">
					<h1>DEMANDE DE DEVIS</h1>
				</div>
			</div>
			
			<FORM method="POST" action="envoi.php">
			<P>Votre nom:<br>
			<INPUT type="text" name="nom" size=30>
			</p>
			<P>Votre numéro de téléphone:<br>
			<INPUT type="text" name="tel" size=10>
			</p>
			<P>Votre adresse E-Mail:<br>
			<INPUT type="text" name="email" size=30>
			</p>
			<P>Message:<br>
				<textarea name="message" cols=30 rows=5></textarea>
			</p>
			<INPUT class="boutton"type="submit" value="Envoyer">
		</FORM>	
			
			<footer>
				
				<p>DELEU CHRISTOPHE. TELEPHONE : 0474/075740. EMAIL : CHRISTOPHE@DELEU.WORK   DEVIS GRATUIT!!!!  </p>	
				
			</footer>
        </div>
	</body>
</html>