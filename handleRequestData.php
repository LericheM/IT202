<?php
echo "<pre>" . var_export($_GET, true) . "</pre>";
if(isset($_GET['name'])){
	echo "<br> Hello, " . $_GET['name'] . "<br>";
}
if(isset($_GET['number'])){
	$number = $_GET['number'];
	echo "<br>" . $number . " should be a number...";
	echo "<br>but it might not be<br>";
}
if(isset($_GET['add1'])){
	$add1 = $_GET['add1'];
}}
if(isset($_GET['add2'])){
	$add2 = $_GET['add2'];
}
if($add1 != NULL and $add2 != NULL){
	$sum = $add1+$add2;
	echo "<br> The sum of " .$add1." and ".$add2." is: ". $sum;
}
?>
