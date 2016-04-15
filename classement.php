<?php
require_once './includes/functions.php';
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
		<div class="fond_compte">
			<h1 class="classement">Classement</h1>
			<button class="btn_jouer">jouer</button>
			<table class="tableau_scores">
				<tr>
					<td>Membre</td>
					<td>Rang</td>
					<td>Meilleur score</td>
					<td>Score total</td>
				</tr>
                <?php
                $i=0;
                foreach(selectScore($pdo) as $user) {
                    $i++;
                    ?>
                    <tr class="resultats">
                        <td><?= $user['username'] ?></td>
                        <td><?= $i ?></td>
                        <td><?= $user['score_best'] ?></td>
                        <td><?= $user['score_total'] ?></td>
                    </tr>
                <?php
                }
                ?>
			</table>
		</div>
	</section>
	<footer class="footer_2">
		<ul class="items_footer_2">
			<a href=""><li>Contact</li></a>
			<a href=""><li>Plan du site</li></a>
		</ul>
		<ul class="R_S_2">
			<a href=""><li><img src="img/picto_facebook.png"></li></a>
			<a href=""><li><img src="img/picto_twitter.png"></li></a>
			<a href=""><li><img src="img/picto_instagram.png"></li></a>
		</ul>
	</footer>
</body>
</html>
