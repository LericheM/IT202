<!DOCTYPE HTML>
<html>
<head>
<script>
  function isEmail(inputElement){
    email = inputElement.value;
    return "@" in email;
    let errorCnt = 0;
  }
  function isEmpty(inputElement){
    return inputElement.value == "";
  }
  function validateForm(inputL, otherName){
    //this function should return a boolean stating validaty of form data
    otherL = document.forms[0][otherName];
    otherVal = otherL.value;
    inputVal = inputL.value;

    if(isEmpty(inputVal)){
      //Data is empty string
      console.log(inputElement.name + " does not contain a value");
      return false;
    }
    if(isEmail(inputVal)){
      // passes email validatity and empty validity can return validity here
      if(!isEmpty(inputVal)){
        return (otherVal == inputVal);
    }
    }
    else if(otherL.type == "password"){
      if(!isEmpty(inputVal)){
        return (otherVal == inputVal);
      }
    }
    else{
      return isEmpty(inputVal);
    }

  }
</script>
</head>

<body>
<form onsubmit="return false;">

<input name="email" type="email"/>
<input name="emailconfirm" type="email" onchange= "validateForm(this,'email');"/>
<input name="password" type="password"/>
<input name="passwordconfirm" type="password" onchange= "console.log('onchange');validateForm(this,'password');"/>
<input name="username"/>

<input type="submit" value="Submit"/>

</form>
</body>
</html>