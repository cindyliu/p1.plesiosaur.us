<!DOCTYPE html>

<html>

	<head>
		<?php require_once('logic.php'); ?>
		<title>RAFFLE</title>
	</head>

	<body>

	<form method='POST' action='raffle.php'>
		Enter 5 contestants' names or email addresses.<br>
		If you enter an email address and it wins, an email will be sent to that address informing the owner that s/he has won.<br>
		<?php if(count($_POST) != 0): ?>
			<input type='text' name='contestant1'><br>
			<input type='text' name='contestant2'><br>
			<input type='text' name='contestant3'><br>
			<input type='text' name='contestant4'><br>
			<input type='text' name='contestant5'><br>
			<input type='submit' value='Pick a winner!'><br>
		<?php else: ?>
			<?php foreach($_POST as $k => $v): ?>
				<input type='text' name='<?=$k?>' value='<?=$v?>'><br>
			<?php endforeach; ?>
			<input type='submit' value='Play again!'><br>
		<?php endif; ?>
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

	</body>

</html>
