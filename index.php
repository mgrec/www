<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="./animate/animate.css">
	<link rel="stylesheet" type="text/css" href="styles.css">
	<meta charset="utf-8">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
	<script type="text/javascript" src="js/localscroll/jquery.localscroll.js"></script>
	<script type="text/javascript" src="js/localscroll/jquery.scrollTo.js"></script>
	<script type="text/javascript" src="js/lancement.js"></script><!-- permet le lancement de la fonction de scroll -->
	<title>Semaine Intensive 3D/WEB</title>
</head>
<body>
	<section id="ancre_1" class="home">
		<header>
			<ul class="nav">
				<a id="acc" href="#ancre_1"><li>Accueil</li></a>
				<a id="pres" href="#ancre_2"><li>Présentation</li></a>
				<a href="index.php"><li>JOUER</li></a>
				<a href="classement.php"><li>Classement</li></a>
				<a href="compte_2.php"><li>Compte</li></a>
			</ul>
		</header>
		<img class="logo_accueil animated fadeInLeft" src="img/LOGO_3.png">
		<h2 class="titre_accueil animated fadeInRight">UNE VRAIE EXPÉRIENCE 3D</h2>
		<h3 class="sous_titre_accueil animated fadeInRight">Venez vite défier la communauté</h3>
		<a href="compte_2.php"><button class="btn_accueil animated bounce"><p>JOUER</p></button></a>
		<div class="cadre_noir"></div>
	</section>
	<section id="ancre_2" class="presentation">
		<container class="describe">
			<img id="logo2" class="logo_petit" src="img/LOGO_PETIT.png">
			<p class="texte_presentation text">Projetez-vous dans un univers hors du commun!<br>Ce jeu en 3D vous immergera dans un tube, dans LE tube.<br>Votre mission, si toutefois vous l'acceptez, est de faire un meilleurs score que la communauté.<br>Venez défier vos amis et montrez-nous quel challenger vous êtes.</p>
			<p class="motivation text">Laissez exceller le pilote galactique qui sommeille en vous!</p>
		</container>
		<ul class="pictures_shot img_bas">
			<li><img src="img/photo_1.jpg"></li>
			<li><img src="img/photo_2.jpg"></li>
			<li><img src="img/photo_3.jpg"></li>
		</ul>
		<a class="btn_insc" href="compte_2.php"><button class="btn_inscription">INSCRIPTION / CONNEXION</button></a>
	</section>
	<section class="qui_sommes_nous">
		<div class="cadre_noir_2"></div>
		<ul class="equipe">
			<li>Maxime GREC</li>
			<li>Pierre ZGULL</li>
			<li>Victor MICHEL</li>
		</ul>
	</div>
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
</section>
<script src="./js/animeclique.js" charset="utf-8"></script>
</body>
</html>
