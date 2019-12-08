<?php
//destroy session and redirect to register/login screen
session_start();
session_unset();
session_destroy();
echo "It's all gone!";
echo var_export($_SESSION, true);
header(location:"./registration.php");
?>
<html>
<p>hi</p>

</html>