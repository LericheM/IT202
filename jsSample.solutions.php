
<html>
<head>

</head>
<body>
    <!--Using help from w3schools.com tutorial on DOM Nodes-->
    <div id = "div1">
        <p id = 'first'>Mathew</p>
        <p id = 'last'>Leriche</p>
    </div>

    <script>
        var div2 = document.createElement("div");
	var div1 = document.getElementById("div1");
	document.body.appendChild(div2);
	var p1 = document.createElement("p");
	p1.innerHTML = "new element added";
	div2.appendChild(p1);
    </script>
</body>

</html>
