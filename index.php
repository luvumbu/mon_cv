<?php
session_start();
include("class/php/ip.php");
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php
	include("link.html"); // ajout des liens externes 
	include("link_php.php"); // pour toutes les classe php 
	include("link_js.html"); // pour toutes les class Javascript
	?>
	<title>Bokonzi</title>
</head>

<body>
	<div id="body">
		<header>
			<?php
	 	include("model/header.php");
			?>
		</header>
		<section>
			<?php
			include("model/section.php");
			?>
		</section>
		<footer>
			<?php
			include("model/footer.php");
			?>
		</footer>
		<?php
		include("vue.html");
		?>
	</div>
</body>

</html>