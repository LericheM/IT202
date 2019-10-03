<html>
<head>
<!--css and js here -->
<script>
function pageLoaded(){

//alert("Hello World");
var myVariable;//scoping type weird here
let myIntVariable;//only works in this scope
//myVariable = prompt("What's your name?");
//alert("Hello,"+ myVariable);

let myNum = 0;
for(let i = 0; i < 10; i++){
	myNum += 0.1;
}
//alert("My num is 1: " + (myNum == 1) + "/nMy Num: " + myNum);
console.log("My num is 1: " +(myNum ==1) +"/nMy num: " +myNum);

	//let myP = document.getElementById("myP");//define elements before calling
	console.log(myP);
}
</script>
</head>
<body onload = "pageLoaded();">
<!-- html content -->
<p id= "myP"> It loaded, yay!</p>
</body>
</html>
