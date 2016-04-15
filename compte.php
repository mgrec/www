<?php
require_once './includes/functions.php';
include_once ('./includes/session.php');
$user = getUserByUsername($pdo);
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
	<section id="ancre_1" class="compte">
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
		<div class="fond_compte">
			<h1 class="mon_compte">Mon compte</h1>
			<img class="photo_id" src="img/Photo_ID.png">
			<h2 class="nom_id"><?= $user['username'] ?></h2>
			<a href="./game.php"><button class="btn_jouer">JOUER</button></a>
			<a href="./includes/deconnection.php"><button class="btn_jouer">DECONNECTION</button></a>
			<table class="tableau_scores">
				<tr>
					<td>Meilleur Score</td>
					<td>Score Total</td>
				</tr>
				<tr class="resultats">
					<td><?= $user['score_best'] ?></td>
					<td><?= $user['score_total'] ?></td>
				</tr>
			</table>
		</div>
	</section>
	<footer class="footer_3">
		<ul class="items_footer_3">
			<a href=""><li>Contact</li></a>
			<a href=""><li>Plan du site</li></a>
		</ul>
		<ul class="R_S_3">
			<a href=""><li><img src="img/picto_facebook.png"></li></a>
			<a href=""><li><img src="img/picto_twitter.png"></li></a>
			<a href=""><li><img src="img/picto_instagram.png"></li></a>
		</ul>
	</footer>
</body>
</html>
