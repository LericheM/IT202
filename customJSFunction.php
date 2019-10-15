<!DOCTYPE HTML>
<html>
<head>
<script>
  function validateForm(inputL, compL){
    let checkL = document.getElementByName(compL);
    let name = inputL.name;
    let valID = "validation." +name;
    let valL = document.getElementById(valID);
    let value = inputL.value;
    let type = inputL.type;
    if(value == checkL.value){
        if (type == "email" && "@" in value){
            if(valL && value){
              valL.remove();
            }
            else{
              if(!valL){
                valL.document.createElement("span");
                valL.id = vid;
                document.body.appendChild(valL);
              }
              if(!value){
                valL.innerText = "Please enter an email";
                console.log("Please enter an email")
                return false;
              }
              valL.innerText = name +" has an invalid value";
            }
            return false;
          }
          elseif(type == "password"){
            if(valL && value){
              valL.remove();
            }
            else{
              if(!valL){
                valL.document.createElement("span");
                valL.id = vid;
                document.body.appendChild(valL);
              }
              if(!value){
                val.innerText = "Please enter a password";
                return false;
              }
              valL.innerText = name +" is invalid";
            }

          }
          elseif(type == "username"){
            if(valL && value){
              valL.remove();
            }
            else{
              if(!valL){
                valL.document.createElement("span");
                valL.id = vid;
                document.body.appendChild(valL);
              }
              if(!value){
                valL.innerText = "Please enter a username";
                return false;
              }
            }
          } 
    }
  }
</script>
</head>

<body>
<form onsubmit="return false;">

<input name="email" type="email"/>
<input name="emailconfirm" type="email" onchange = "validateForm(this,'email')"/>
<input name="password" type="password"/>
<input name="passwordconfirm" type="password"/>
<input name="username"/>

<input type="submit" value="Submit"/>

</form>
</body>
</html>