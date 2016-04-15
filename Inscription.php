<?php
include_once('./includes/functions.php');
insertUser($pdo);
?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="animate/animate.css">
<link rel="stylesheet" type="text/css" href="styles.css">
<meta charset="utf-8">
	<head>
		<title>Semaine Intensive 3D/WEB</title>
	</head>
	<body>
		<section class="compte">
			<header>
				<ul class="nav">
					<a href="index.php"><li>Accueil</li></a>
					<a href="index.php"><li>Présentation</li></a>
					<a href="index.php"><li>JOUER</li></a>
					<a href="classement.php"><li>Classement</li></a>
					<a href="compte.php"><li>Compte</li></a>
				</ul>
			</header>
			<div class="cadre_noir_2"></div>
			<div class="fond_compte"></div>
		<section class="inscription">
			<h1 class="formulaire_inscription">INSCRIVEZ-VOUS</h1>
			<form method="post" action="">
			    <div>
			        <label for="identifiant">Identifiant :</label>
			        <input name="username" type="text" id="identifiant" />
			    </div>
			    <div>
			        <label for="mail">Mail :</label>
			        <input name="email" type="email" id="mail" />
			    </div>
			    <div>
			        <label for="mdp">Mot de Passe :</label>
			        <input name="pass" type="password" id="mdp" />
			    </div>
					<div class="btn_formulaire_inscription">
					<button type="submit">ENVOYER</button>
					</div>
			</form>

		</section>
		<footer>
			<ul class="items_footer">
				<a href=""><li>Contact</li></a>
				<a href=""><li>Plan du site</li></a>
			</ul>
			<ul class="R_S">
				<a href=""><li><img src="img/picto_facebook.png"></li></a>
				<a href=""><li><img src="img/picto_twitter.png"></li></a>
				<a href=""><li><img src="img/picto_instagram.png"></li></a>
			</ul>
		</footer>
	</body>
</html>
