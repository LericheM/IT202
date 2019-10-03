<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);
function getName(){
    if(isset($_GET['name'])){
        echo "<p>Hello, " . $_GET['name'] . "</p>";
    }
}
?>
<html>
<!--comment-->
<head></head>
<body><?php getName();?>
<form mode="GET" action="#">
<input name = "name" type = "text" placeholder = "Enter your name"/>
<input name = "number" type = "number" placeholder ="Enter a number"/>
<input name = "passwd" type = "password" placeholder= "Enter a fake password"/>

<label for="Yes">Yes</label>
<input type="radio" name="radio" id="Yes" value="Yes"/>
<label for="No">No</label>
<input type="radio" name="radio" id="No" value="No"/>

<select name="dropdown">
    <option value="1">One</option> 
    <option value="2">Two</option>    
    <option value="3">Three</option>
</select>
<input type="checkbox" name="check"/>
<textarea name="text"></textarea>
<input type="date" name="date"/>

<input type="submit" value="Try it"/>
</form>
</body>
</html>

<?php
if(isset($_GET)){
    echo "<br><pre>". var_export($_GET, true) . "</pre><br>";
}
?>