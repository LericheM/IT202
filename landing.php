<?php
session_start();
include_once("./functions.php");

?>
<html>
<head>
    <section id= "top">
        Hey there <?php get_username();?>!
    </section>
    <!-- This section was taken from a previous assignment with HTML5 -->
    <script>
	function queryParam(){
		var params = new URLSearchParams(location.search);
		if(params.has('page')){
			var page = params.get('page');
			var ele = document.getElementById(page);
			if(ele){
				let home = document.getElementById('home');
				let about = document.getElementById('about');
				home.style.display="none";
				about.style.display = "none";
				ele.style.display = "block";
			}
		}
		else{
			let home = document.getElementById('home');
			home.style.display = "block";
			let about = document.getElementById('about');
			about.style.display=  "none";
		}
	}
    </script>
    <nav>
    <a href="?page=home">Home</a>
    <a href="?page=about">About</a>
    <a href="./game.php">Play!</a>
    </nav>
</head>
<body>
    
</body>
</html>