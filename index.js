function validateform(){  
       
    var name=document.getElementById("name").value; 
    var brand=document.getElementById("brand").value;
     var image=document.getElementById("image").value;
    var branch=document.getElementById("branch").value; 


     if (image==""){  
      document.getElementById("demo-image").innerHTML = "Name can t be blank";  
        document.getElementById("demo-image").className="error";
    }
     if(brand==""){  
       document.getElementById("demo-brand").innerHTML = "brand can't be blank.";  
         document.getElementById("demo-brand").className="error";
      }

      if (name==""){  
      document.getElementById("demo-name").innerHTML = "Name can t be blank";  
      document.getElementById("demo-name").className="error";
    }

    }  