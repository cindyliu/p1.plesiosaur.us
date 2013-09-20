<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Day or Night?</title>
		<link rel="stylesheet" href="dn_style.css">
		<?php require_once('dnlogic.php'); ?>
	</head>

	<body>
	        <style type='text/css'>
		        body {
			        background-color: <?=$bg_color?>;
			        color: <?=$text_color?>;
			        text-align: center;
			}
			div.container {
			        height: 3em;
			        overflow: auto;
			        margin: auto;
			        position: absolute;
			        top: 0; right: 0; bottom: 0; left: 0;
			}
		</style>
		
		<div class="container">
		        It is currently <?=$day_or_night?>time.
		</div>
	</body>
</html>
