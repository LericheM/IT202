<?php
echo "<pre>" . var_export($_GET, true) . "</pre>";
if(isset($_GET['name'])){
	echo "<br> Hello, " . $_GET['name'] . "<br>";
}
?>
