
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
        var node = document.createTextMode("<p id = 'text'> new element added</p>");
        div2.appendChild(node);
    </script>
</body>

</html>