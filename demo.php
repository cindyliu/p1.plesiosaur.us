<!DOCTYPE html>

<html>

	<head>
		<?php require_once('logic.php'); ?>
		<title>DEMO</title>
	
		<style>
			.box {
				width:<?=$size?>;
				height:<?=$size?>;
				float:left;
				margin:4px;
				background-color:red;
			}
		</style>

	</head>

	<body>

	<form method='POST' action='demo.php'>
		Enter 5 contestants<br>
		<?php if(count($_POST) != 0): ?>
			<?php foreach($_POST as $k => $v): ?>
				<input type='text' name='<?=$k?>' value='<?=$v?>'><br>
			<?php endforeach; ?>
		<?php else: ?>
			<input type='text' name='contestant1'><br>
			<input type='text' name='contestant2'><br>
			<input type='text' name='contestant3'><br>
			<input type='text' name='contestant4'><br>
			<input type='text' name='contestant5'><br>
		<?php endif; ?>
		<input type='submit' value='Pick a winner!'><br>
	</form><br>

	<?php if(count($_POST) != 0): ?>
		<p>The winning number is <?=$target?>!</p>
	<?php endif; ?>

	<?php foreach($_POST as $k => $v): ?>
		<?php $contestants[$v] = rand(1,10); ?>
		<?=$v?> is a 
		<?php if($contestants[$v] == $target): ?>
			<b>Winner!!</b>
			<?php mail($v,$subject,$message); ?>
		<?php else: ?>
			Loser :(
		<?php endif; ?>
		<br>
	<?php endforeach; ?>


	        The square of 4 is <?=$square;?><br>
	        My favorite color is <?=$favorite_color;?><br>
		I have this much money: <?=$calculated_total;?><br>
		You're a <?=$person_type;?>.<br>
		Your total is <?=calculate_total(10,3,'priority');?>.<br>
		Right now it is <?=$now?>.<br>
		Here's a random number between 1 and 100: <?=rng()?>.<br>

		<?=$boxes?>

		Liz is a <?=$contestants1["Liz"]?>

		<h1>Contestants</h1>

		<?php
		foreach($contestants1 as $key => $value) {
			echo $key." is a ".$value."!<br>";
		}
		?>

		<pre>
			<?php print_r($contestants1); ?>
		</pre>

		<?php print_r($contestants1); ?>

		<pre>
			<?=$arr_print?>
		</pre>

<!--
	<p>Refresh to play again</p>

	<p>The winning number is <?=$target?>!</p>

	<?php foreach($contestants as $key => $value): ?>
		<?php if($value == $target): ?>
			<?=$key?> is a Winner! :)<br>
			<?php $num_winners++; ?>
		<?php else: ?>
			<?=$key?> is a Loser! :(<br>
		<?php endif; ?>
	<?php endforeach; ?>
	<?php if($num_winners > 1): ?>
		<p>It's a tie!!!</p>
	<?php elseif($num_winners == 0): ?>
		<p>No winners this round! Sad.</p>
	<?php endif; ?>

-->
	</body>

</html>
