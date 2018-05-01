



function scrolled(event)
{
   var HauteurDuBody= document.documentElement.clientHeight || document.body.clientHeight; 
    var PositionDuScroll=document.body.scrollTop || document.documentElement.scrollTop;
    var menu=document.getElementById('lol');
    var x=HauteurDuBody-PositionDuScroll;
    
        if((PositionDuScroll>100)&&( event.screenY>67 && event.screenY<150))
        {
            menu.style.display='visible !important' ;
            menu.style.width='100%';
            menu.style.top='0';   
            menu.style.position="fixed";
        }
    else
        {
           menu.style.position=""; 
        }   
        
    //alert(event.screenY);
}

addEventListener('mousemove',scrolled);

