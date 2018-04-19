
function Verif_N_utilisateur()
{
    
    var user=document.getElementById('u');
    var user_s=document.getElementById('u_s');
    var c=0;
    
    if(user.value=='')
        {
            user.style.backgroundColor='#ff7f7f';
            user_s.style.color='#ff7f7f';
            user_s.innerHTML='  Champs obligatoire';
    c++;
        }
    else
    {    
            user.style.backgroundColor='';
            user_s.innerHTML='';        
    }
    return c;
}


function Verif_mot_de_passe()
{
    var MDp=document.getElementById('pass_user');
    var mdp_s=document.getElementById('m_s');
    var c=0;
    
    if(MDp.value=='')
        {
            MDp.style.backgroundColor='#ff7f7f';
            mdp_s.style.color='#ff7f7f';
            mdp_s.innerHTML='   Champs obligatoire';
            
        c++;
        }
    else
        {
            MDp.style.backgroundColor='';
            mdp_s.innerHTML='';
            
        }
    return c;
}

function Verif(Error)
{
    var y=Verif_N_utilisateur()+Verif_mot_de_passe();
    if(y==0)    
    {
                        if(Error==0)
                                    {
                                         var user=document.getElementById('u');
                                        var user_s=document.getElementById('u_s');
                                        var MDp=document.getElementById('pass_user');

                                        user_s.style.color='#ff7f7f';
                                        user.style.backgroundColor='#ff7f7f';
                                        MDp.style.backgroundColor='#ff7f7f';
                                        user_s.innerHTML='  Compte introuvable';
                                    return false;
                                    }
                                        else
                                    {
                                          user_s.style.color='';
                                        user.style.backgroundColor='#98FB98';
                                        MDp.style.backgroundColor='#98FB98';
                                        user_s.innerHTML='  ';
                                                    return true;
                                        }
    }               
    else
    {
    return false;    
    }
}    
