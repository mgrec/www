<?php
session_start();
if(isset($_SESSION['username'] )) {
    header('Location: ./compte.php');
}else{

}
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
			<ul class="boutons">
				<li><a href="inscription.php"><button class="animated fadeIn" type="submit">INSCRIPTION</button></a></li>
				<li><a href="connexion.php"><button class="animated fadeIn" type="submit">CONNEXION</button></a></li>
			</ul>
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
