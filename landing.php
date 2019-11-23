<?php
include_once("functions.php");

?>
<html>
<head>
    <section id= "top">
        Hey there! <?php
        if(check_sesh()){
            get_username(); ."!";
        }else{
            echo"Guest!";
        }
        ?>
    </section>

</head>
<body>
    
</body>
</html>