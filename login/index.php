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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<div id="body">
		<header>
			<?php
			if (isset($_SESSION["information"])) {

				if ($_SESSION["information"] == "Succes") {
				} else {
					echo ' <meta http-equiv="refresh" content="0; URL=../index.php" />';
				}
			} else {
				echo ' <meta http-equiv="refresh" content="0; URL=../index.php" />';
			}

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
	<style>
		.nav-link:hover {
			cursor: pointer;
		}

		.block {
			display: block;
			text-align: center;
		}

		.ok {
			text-align: center;
			display: block;
		}
	</style>
</body>

</html>