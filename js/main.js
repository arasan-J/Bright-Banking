function validateform(){  
    var userName=document.form.userName.value;  
    var password=document.form.password.value;  
      
    if (userName==null || userName==""){  
      alert("Name can't be blank");  
      return false;  
    }else if(password.length<6){  
      alert("Password must be at least 6 characters long.");  
      return false;  
      }  
    }  
