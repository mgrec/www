<?php
include_once('./includes/functions.php');
connectUser($pdo);
$err = connectUser($pdo);
?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="animate/animate.css">
<link rel="stylesheet" type="text/css" href="styles.css">
<script src="./js/jquery.js" charset="utf-8"></script>
<script src="./js/lancement.js" charset="utf-8"></script>
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
			<h1 class="formulaire_inscription">CONNEXION</h1>
			<form method="post" action="">
				<div>
					<label for="identifiant">Identifiant :</label>
					<input name="username" type="text" id="identifiant" />
				</div>
				<div>
					<label for="mdp">Mot de Passe :</label>
					<input name="pass" type="password" id="mdp" />
				</div>
				<INPUT class="souvenir" type="checkbox" name="choix" value="1"><span class="remember_me">Se souvenir de moi</span>
					<div class="btn_formulaire_connexion">
						<button type="submit">Connexion</button>
					</div>
					<h2><?=$err?></h2>
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
