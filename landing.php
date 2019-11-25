<?php
include_once("functions.php");

?>
<html>
<head>
    <section id= "top">
        Hey there! <?php
            $name = get_username();
            echo $name;
        }else{
            echo"Guest!";
        }
        ?>
    </section>

</head>
<body>
    
</body>
</html>