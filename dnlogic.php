<?php

$hour = date('G');

if($hour >= 6 AND $hour <= 20) {
	 $day_or_night = "day";
	 $bg_color = "#4cf";
	 $text_color = "#621";
}
else {
	 $day_or_night = "night";
	 $bg_color = "#113";
	 $text_color = "#ffd";
}


?>
