<?php
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
<input type="submit" value= "Confirm"/>
</form>
</body>
</html>

<?php
if(isset($_GET)){
    echo "<br><pre>". var_export($_GET, true) . "</pre><br>";
}
?>