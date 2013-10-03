<?php
/* open and close tags <? ?>; everything in between is php */

$square = 4 * 4;
$cube = 4 * 4 * 4;

$favorite_color = "red";

$username = 'bob34';

$quarter = .25;
$dime	 = .10;
$nickel	 = .05;

$calculated_total = ($quarter * 3) + ($dime * 4) + ($nickel * 5);

$age = 5;

if($age <= 12) {
	$person_type = 'kiddo';
}
elseif($age > 12 AND $age <= 19) {
	$person_type = 'teenager';
}
elseif($age > 19 AND $age <= 80) {
	$person_type = "grown-up";
}
else {
	$person_type = "super wise person";
}


function calculate_total($subtotal, $discount, $shipping_method) {

	 if($shipping_method == 'priority') {
	         $shipping_rate = 5;
	 }
	 elseif($shipping_method == 'express') {
	 	 $shipping_rate = 15;
	 }

	 $tax = .09 * $subtotal;

	 $total = $subtotal + $shipping_rate - $discount;

	 return $total;
}

/* $now = date('D, n/d/Y, g:i:sA T');
*/

$now = date('c');

function rng() {
	 return rand(1,100);
}

$boxes = "";
$size = "";
for($i = 0; $i < 10; $i++) {
	$size = $size.rand(25,250)."px";
	$boxes = $boxes."<div style='width:$size; height:$size; float:left; margin:4px; background-color:red;'>".$i."</div>";
	$size = "";
}

/*
$contestants["Sam"] = "loser";
$contestants["Eliot"] = "loser";
$contestants["Liz"] = "winner";
$contestants["Max"] = "loser";


$arr_size = count($contestants);
$arr_print = "";
$keys = array_keys($contestants);
$values = array_values($contestants);
for($i = 0; $i < $arr_size; $i++) {
	$arr_print = $arr_print.$keys[$i]." is a ".$values[$i]."!<br>";
}

$contestants = Array(
	'Amanda' => rand(1,10),
	'Bruce'  => rand(1,10),
	'Cassie' => rand(1,10),
	'Dwayne' => rand(1,10)
);
*/


$target = rand(1,10);
$subject = "YOU'VE WON!!";
$message = "Congratulations! You won the raffle! Your winnings are an email - and here it is!";
$num_winners = 0;

?>

