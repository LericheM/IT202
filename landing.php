<?php
include_once("functions.php");

?>
<html>
<head>
    <section id= "top">
        Hey there! <?php
        if(check_sesh()){
            $name = get_username();
            echo "Hello ". $name;
        }else{
            echo"Guest!";
        }
        ?>
    </section>

</head>
<body>
    
</body>
</html>