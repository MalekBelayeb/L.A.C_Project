

var username=document.getElementById('register_user');

var email=document.getElementById('register_email');
var submit_btn=document.getElementById('register_submit');
var b=document.getElementById('register_form');



function Verif_username()
{
    var username=document.getElementById('register_user');
     var onlyNumber=/^[0-9]*$/gm;
    var onlyletter=/^[A-Za-z]+$/;
    var x=0;
    var n=username.value.match(onlyNumber);
    var s=username.value.match(onlyletter);
    var error1=document.getElementById('register_user_span');
        error1.style.color='#ff7f7f';
     if(username.value=='')
        {
             setTimeout((function(){username.style.backgroundColor='#ff7f7f'}),100);
             error1.innerHTML="  Champs obligatoire*";
        x++;        
        }
    else{
        username.style.backgroundColor='';
        error1.innerHTML='';
        
     if((n!=null || s!=null ))
    {
    setTimeout((function(){username.style.backgroundColor='#ff7f7f'}),300);
    error1.innerHTML='  Nom d\'utilisateur doit contenir des chiffres et des lettres*';   
    x++;
    }
    else
        {
            error1.innerHTML='';
                         setTimeout((function(){username.style.backgroundColor='#98FB98'}),100);
        }
    }
return x;
}

function Verif_mail()
{
    var email=document.getElementById('register_email');
    var error3=document.getElementById('email_span');
        error3.style.color='#ff7f7f';
    var x=0;
    if(email.value=='')
        {
            setTimeout((function(){email.style.backgroundColor='#ff7f7f'}),100);
            error3.innerHTML="  Champs obligatoire*";
            x++;
        }
    else
        {
            error3.innerHTML='';
          email.style.backgroundColor='';
        }
  
return x;
}

function Verif_MDP()
{
    var error4=document.getElementById('mdp_span');
var MDP=document.getElementById('MDP');
        error4.style.color='#ff7f7f';
    var x=0;
 if(MDP.value=='')
        {
             setTimeout((function(){MDP.style.backgroundColor='#ff7f7f'}),100);
           
            error4.innerHTML="  Champs obligatoire*";
        x++;
        }
    else
    {
        error4.innerHTML='';
    
    MDP.style.backgroundColor='';
        if((MDP.value.length>0)&&(MDP.value.length<5))
        {
          
            error4.innerHTML="    Mot de passe faible";   
        
        }
        else if((MDP.value.length>5)&&(MDP.value.length<11))
        {
         
            error4.style.color='#FFFF66';
            error4.innerHTML="    Mot de passe moyen";   
        
        }
        else if(MDP.value.length>12)
        {
          error4.style.color='#98FB98';
            error4.innerHTML="    Mot de passe fort";   
            
             setTimeout((function(){MDP.style.backgroundColor='#98FB98'}),100);
        }
        else
            {
                
            }        
    }
return x;
}

function Verif_confirmMDP()
{
       var x=0;
    var MDP=document.getElementById('MDP');
var confirm_MDP=document.getElementById('MDP_confirm');
    
var error2=document.getElementById('ee2');
error2.style.color='#ff7f7f';
    
        if(confirm_MDP.value=='')
          {
              var x=0;
             setTimeout((function(){confirm_MDP.style.backgroundColor='#ff7f7f'}),100);
              error2.innerHTML="  Champs obligatoire*";
              x++;
          }
    else{
    error2.innerHTML='';
         confirm_MDP.style.backgroundColor='';
    if(MDP.value!=confirm_MDP.value)
    {  
    error2.innerHTML='Mot de passe n\'est pas identique*';  
    setTimeout((function(){confirm_MDP.style.backgroundColor='#ff7f7f'}),100);
    x++;
    }
    else
        {
            error2.innerHTML='';
            confirm_MDP.style.backgroundColor='#98FB98';
        }
    }
    return x;
}


function Verif_Registration()
{
        
if(Verif_username()+Verif_MDP()+Verif_mail()+Verif_confirmMDP()==0)
    {
        
            return true;
    }
    
    else
        return false;
}