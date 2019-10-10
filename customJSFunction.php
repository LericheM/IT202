<!DOCTYPE HTML>
<html>
<head>
<script>
  function validateForm(inputL, compL){
    let name = inputL.name;
    let valID = "validation." +name;
    let valL = document.getElementById(valID);
    let value = inputL.value;
    if(value == compL){
        
    }
  }
</script>
</head>

<body>
<form onsubmit="return false;">

<input name="email" type="email"/>
<input name="emailconfirm" type="email"/>
<input name="password" type="password"/>
<input name="passwordconfirm" type="password"/>
<input name="username"/>

<input type="submit" value="Submit"/>

</form>
</body>
</html>