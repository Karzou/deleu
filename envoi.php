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
			<div class="envois">
<?php 



$nom = $_POST['nom'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$message = $_POST['message'];
$date = date('d F Y');  
$email_msg = "Demande de devis (".$date. "): \n\n";
$email_msg .="Nom : ".$nom."\n";
$email_msg .="Téléphone : ".$tel."\n";
$email_msg .="Email: ".$email."\n";
$email_msg .="Message: ".$message."\n"; 
 

  $dest = "christophe@deleu.work";
  $sujet = "Demande de devis";
  
  $headers = "From: kvanconingsloo@gmail";
  if (mail($dest, $sujet, $email_msg, $headers)) {
    echo "<h1>Merci pour votre demande. Nous vous contacterons dans les plus bref délais.</h1>";
  } else {
    echo "<h1>Échec de l'envoi de l'email...</h1>";
  }
?>
 </div>
			
			
			<footer>
				
				<p>DELEU CHRISTOPHE. TELEPHONE : 0474/075740. EMAIL : CHRISTOPHE@DELEU.WORK   DEVIS GRATUIT!!!!  </p>	
				
			</footer>
        </div>
	</body>
</html>

