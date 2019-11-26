<?php
include_once("./functions.php");

?>
<html>
<head>
    <section id= "top">
    <?php
    session_start();
    echo "We found: " . var_export($_SESSION['user'], true);
    ?>
        Hey there <?php get_username();?>!
    </section>

</head>
<body>
    
</body>
</html>