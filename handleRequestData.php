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
}
if(isset($_GET['add2'])){
	$add2 = $_GET['add2'];
}
if(isset($_GET['word1'])){
	$word1 = $_GET["word1"];

}
if(isset($_GET['word2'])){
	$word2 = $_GET['word2'];
}
if($add1 != NULL and $add2 != NULL){
	$sum = $add1+$add2;
	echo "<br> The sum of " .$add1." and ".$add2." is: ". $sum;
}
if($word1 != NULL and $word2 != NULL){
	$catW = $word1 . $word2;
	echo "<br>". $catW;
}
echo "<br>" . "I've found when adding special characters to number
values (I assume ints and floats behave the same here) if there is a
special character separating the entirety of the number (1 + 1@2 would
be 2 instead of 13) then addition will contain everything before the
special character. If the data value is a string, then it seems to
automatically add escape sequences even when I put the raw symbols in
the data." ."<br>" . "If you assign a variable two different values the
most recent value will overwrite the previous data."

?>
