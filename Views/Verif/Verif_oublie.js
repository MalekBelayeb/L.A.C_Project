$(document).ready(function(){
    function checkExist()
    {
                    var email=$("#adresse_mail").val();
                 var username=$("#nom_utilisateur").val();


           $.ajax({
              
     url:"http://localhost/version0/Core/OublieCore.php?username="+username+"&"+"email="+email,
      success:function(data)
         {
             if(data!=1)
                 {
         
                 $( "#lost_pwd_submit" ).prop( "disabled", true );
     
                 }
             else 
         {
        $("#lost_pwd_submit" ).prop( "disabled", false );
         }
           
         }
}); 
    }     
    
   function userN(event)
    {
var username=$("#nom_utilisateur").val();
                            var email=$("#adresse_mail").val();

            $("#span1").css({"color": "#ff7f7f"});

        var x=0;
        
         if(username=='')
                            {
                            $("#span1").html("       Champ obligatoire"); 
                            $("#nom_utilisateur").css({"background-color": "#ff7f7f"});                       
                            event.preventDefault();
                            x++;
                            }
        
        else{
             $("#span1").html(""); 

              $.ajax({
              
     url:"http://localhost/version0/Core/OublieCore.php?username="+username+"&"+"email="+email,
      success:function(data)
         {
             
             if(data==1)
                 {
                 $("#span1").html("");  
                 $("#nom_utilisateur").css({"background-color": "#98FB98"});
                 }
             else 
         {
             $("#nom_utilisateur").css({"background-color": "#ff7f7f"});   
             $("#span1").html("Verifiez vos champs adresse ou mail invalide");  
         }
           
         }
});
               
        checkExist();
        }
        
return x;        
        
    }
    
    function adresseM(event)
    {
      var emailregex="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}";
      var adresse=$("#adresse_mail").val();
      $("#span2").css({"color": "#ff7f7f"});

        var x=0;
        if(adresse=='')
            {
                            $("#span2").html("       Champ obligatoire"); 
                            $("#adresse_mail").css({"background-color": "#ff7f7f"});                       
                            event.preventDefault();
            x++;                
            }
         else if(adresse.match(emailregex)==null)
                {
                    $("#span2").html("        Adresse mail non valide");
                    $("#adresse_mail").css({"background-color":"#ff7f7f"});
                    event.preventDefault();
                x++;
                }
        else {
                            $("#span2").html(""); 
                            $("#adresse_mail").css({"background-color": "#98FB98"});                       
                          
                          
        checkExist();
        }
        
        return x;
    }

    
    $('#nom_utilisateur').keyup(userN);
    $('#adresse_mail').keyup(adresseM);
    $("#lost_pwd_submit").click(function()
                               {
        
if(userN(event)+adresseM(event)==0)
{var email=$("#adresse_mail").val();
                 var username=$("#nom_utilisateur").val();
                                    $.ajax({
                                    type:"POST",
                                    url:"http://localhost/AvenirCulturel/Core/OublieCore.php?username="+username+"&"+"email="+email,
                                    data:{lost_pwd_submit:$("#lost_pwd_submit").val()},
                                    success:function(data)
                                    {
                                        alert(data);
                                    if(data==1)
                                        {
                                        }
                                        else{
                                            
                                        }
                                    
                                
                                    }   
                                        });  
                    
             
             
      
            
            
                          
            }
        else {
             
                       // $("#div1").fadeIn(3000);
                       // $("#div1").show();
                       // setTimeout(function(){$("#div1").fadeOut(3000); }, 4000);       
            
        }
        
        
        
        
    });

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
});