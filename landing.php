<?php
session_start();
include_once("./functions.php");

?>
<html>
<head>
    <section id= "top">
        Hey there <?php get_username();?>!
    </section>
    <!-- This section.was taken from a previous assignment with HTML5 -->
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
    
</head>
<body onload ="queryParam();">
    <header>
        <nav>
            <a href="?page=home">Home</a>
            <a href="?page=about">About</a>
            <a href="./game.php">Play!</a>
        </nav>

    </header>
    <div id="home">
    <p>Welcome to tic tac bros. We don't have much to
    show you now, but you can still visit our about page.
    The game will be up and running soon and a frontend
    framework will make this website look cash money for sure!</p></div>
    <div id ="about" style ="display:none;">
        <section class = "Intro">
        <h1>About</h1>
        <p>This is a project created by NJIT Student Mathew Leriche. The aim of
         this project is to host a multiplayer tic tac toe experience for
         classmates to engage in and create it using technologies I learned from
         this course. These technologies include, ajax, jQuery, php, proper CSS
         and if time allows, a little socket programming. </p>
        </section>
    </div>
    
</body>
</html>